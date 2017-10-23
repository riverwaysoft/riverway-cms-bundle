module.exports = (function($) {

    const config = {
        uploadUrl: '/admin/image/redactor-upload',
        downloadUrl: '/admin/image/redactor-manager',
        removeUrl: '/admin/image/remove'
    };

    let activeIndex = -1;
    let isFetching = false;
    let lastScroll = 0;
    let fileList = [];
    let $contentContainer = null;

    function getFileList() {
        $.get(config.downloadUrl, data => {
            fileList = [...data];
            isFetching = false;
            renderContent();
        });
    }

    function handleFileInputChange(event) { 
        isFetching = true;
        const fileInput = event.target;
        let fd = new FormData();
        let validFilesCount = 0;
        let readyState = new Array(fileInput.files.length);
        readyState.fill(false);

        for (let i = 0; i < fileInput.files.length; i++) {
            const file = fileInput.files[i];
            const fileType = file['name'].split('.').reverse()[0];
            const allowedFormats = ['png', 'jpg', 'jpeg', 'gif'];
            const maxSize = 1000000;
            if (!allowedFormats.includes(fileType)) {
                alert('File format "' + fileType + '" is not allowed!');
                continue;
            };

            if (file.size > maxSize) {
                alert('File size too large!');
                continue;
            }

            fd.append('file', file);
            validFilesCount++;
        }

        if (validFilesCount) {
            $.ajax({
                url: config.uploadUrl,
                data: fd,
                processData: false, 
                contentType: false,
                type: 'POST',
                complete: getFileList
            });

            renderContent();
        }
    }

    function handleItemClick(event) {
        const index = $(this).data('fileindex');
        activeIndex = index;
        renderContent();
    }

    function handleItemRemove(itemPath) {
        isFetching = true;
        // console.log(itemPath);

        $.ajax({
            url: config.removeUrl,
            data: {
                path: itemPath
            },
            type: 'POST',
            complete: getFileList
        });

        renderContent();
    }
 
    function renderContent() {
        const extraclass = (isFetching ? 'fetching' : '');

        let fileManagerContent = '<div class="file-manager">'
            +'<input class="file-manager-input" type="file" hidden />'
            +'<button type="button" class="btn btn-outline-primary btn-block file-manager-upload">'
                +'<i class="fa fa-plus" aria-hidden="true"></i>'
            +'</button>'
            +'<ul class="file-manager-list ' + extraclass + '">';
        fileList.forEach((value, index) => {
            // console.log(value);
            fileManagerContent += '<li class="file-manager-item ' + (activeIndex == index ? 'active' : '') + '" data-fileIndex="' + index + '">'
                +'<span class="image"><img src="' + value.thumb + '" /></span>'
                +'<p class="title text-dark">' + value.id + '</p>'
                +'<a class="file-manager-item-delete delete" data-filepath="' + value.id + '" href="javascript:void(0)">'
                    +'<i class="fa fa-times" aria-hidden="true"></i>'
                +'</a>'
            +'</li>';
        });
        fileManagerContent += '</ul></div>';
        $contentContainer.html(fileManagerContent);
        $('.file-manager-list').scrollTop(lastScroll);
        subscribeEventListeners();
    }

    function subscribeEventListeners() {
        $('.file-manager-input').on('change', handleFileInputChange);
        $('.file-manager-upload').on('click', () => $('.file-manager-input').click());
        $('.file-manager-item').on('click', handleItemClick);
        $('.file-manager-list').on('scroll', () => (lastScroll = $('.file-manager-list').scrollTop()));
        $('.file-manager-item-delete').on('click', function() {
            handleItemRemove($(this).data('filepath'))
        });
    }

    function init(options) {
        this.on('click', (event) => {
            
            console.log();
            const $target = $(event.target);
            const _ = require('underscore');
            const onSelect = options.onSelect;
            activeIndex = -1;
            isFetching = true;
            $('#customFileManager').modal('show');
            $('#customFileManager .select-file').on('click', _.once(() => {
                onSelect && activeIndex >= 0 && onSelect(fileList[activeIndex], $target);
                $('#customFileManager').modal('hide');
            }));
            $contentContainer = $('#customFileManager').find('.modal-body');

            getFileList();
            renderContent();
        });
    }
    
    $.fn.manageFiles = init;
}(jQuery));

//USAGE
//$(button_selector: string).manageFiles(config: Object);