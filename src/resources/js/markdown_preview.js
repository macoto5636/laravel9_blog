import {marked} from 'marked';
import $ from 'jQuery';
import hljs from 'highlight.js';

$(function() {
    marked.setOptions({
        langPrefix: '',
        breaks : true,
        sanitize: true,
        highlight: function (code, lang) {
            return hljs.highlightAuto(code, [lang]).value
        }
    });

    var $textarea = $('#markdown_editor_textarea');
    var lineHeight = parseInt($textarea.css('lineHeight'));

    $('#markdown_editor_textarea').keyup(function() {
        var html = marked(getHtml($(this).val()));
        $('#markdown_preview').html(html);

        var lines = ($(this).val() + '\n').match(/\n/g).length;
        $(this).height(lineHeight * lines);
    });

    var target = $('.item-body')
    var html = marked(getHtml(target.html()));
    $('.item-body').html(html);

    function getHtml(html) {
        html = html.replace(/&lt;/g, '<');
        html = html.replace(/&gt;/g, '>');
        html = html.replace(/&amp;/g, '&');
        return html;
    }

    // function setHeight() {
    //     console.log($('#markdown_editor_textarea').height());
    //     console.log($('#markdown_preview').height());
    //     if($('#markdown_editor_textarea').height() >= $('#markdown_preview').height()) {
    //         $('#markdown_preview').height($('#markdown_editor_textarea').height());
    //     } else {
    //         $('#markdown_editor_textarea').height($('#markdown_preview').height());
    //     }
    // }
});
