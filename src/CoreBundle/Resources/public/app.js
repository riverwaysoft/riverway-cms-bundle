global.$ = global.jQuery = window.jQuery = window.$ = require('jquery');
require('bootstrap');
require('fontawesome-iconpicker');
require('summernote/dist/summernote-bs4.min');
// require('./vendor/imperavi/plugins/customfilemanager/customfilemanager');
require('./vendor/nestable/nestable');
global.dragula = require('dragula');

global.Popper = require('popper.js').default;
require('./modules/fileManager');

$(document).ready(() => {
    $('.file-button').manageFiles({
        onSelect: item => {
            console.log(item);
        }
    });
    $(".summernote-editor").summernote();
});
require('select2');
require('./vendor/select2/select2entity');