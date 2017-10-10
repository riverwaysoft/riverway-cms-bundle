
(function($) {
    $.Redactor.prototype.customfilemanager = function() {
        return {
            init: function() {
                const button = this.button.add('customfilemanager', 'CustomFileManager');
                $(button).manageFiles({
                    onSelect: this.customfilemanager.insert
                });
            },
            insert: function(item) {
                this.image.insert('<img src="' + item.image + '" />');
            }
        }
    }
})(jQuery);