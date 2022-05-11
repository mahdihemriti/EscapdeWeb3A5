
$(document).ready(function() {

    $(document).on('change', '#destination_pays', function () {
        console.log("changed")
        let $field = $(this)
        let $form = $field.closest('form')
        let data = {}
        data[$field.attr('name')] = $field.val()
        $.post($form.attr('action'), data).then(function (data) {
            let $input = $(data).find('#destination_ville')
            $('#destination_ville').replaceWith($input)
        })


    })
})