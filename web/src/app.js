global.$ = global.jQuery = window.jQuery = window.$ = require('jquery');

global.redactor = require('./vendor/imperavi/redactor.min.js');
require('./vendor/imperavi/plugins/imagemanager/imagemanager');
require('./vendor/imperavi/plugins/customfilemanager/customfilemanager');
require('./vendor/nestable/nestable');
global.dragula = require('dragula');
require('fontawesome-iconpicker');

global.Popper = require('popper.js').default;
require('./modules/fileManager');

$(document).ready(() => {
    $('.file-button').manageFiles({
        onSelect: item => {
            console.log(item);
        }
    });
});
require('bootstrap');
require('select2');
require('./../bundles/tetranzselect2entity/js/select2entity');