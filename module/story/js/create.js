$(function()
{
    $('#needNotReview').on('change', function()
    {
        $('#reviewer').attr('disabled', $(this).is(':checked') ? 'disabled' : null).trigger('chosen:updated');
        if($(this).is(':checked'))
        {
            $('#reviewerBox').removeClass('required');
        }
        else
        {
            $('#reviewerBox').addClass('required');
        }

        getStatus('create', "product=" + $('#product').val() + ",execution=" + executionID + ",needNotReview=" + ($(this).prop('checked') ? 1 : 0));
    });
    $('#needNotReview').change();

    // init pri selector
    $('#pri').on('change', function()
    {
        var $select = $(this);
        var $selector = $select.closest('.pri-selector');
        var value = $select.val();
        $selector.find('.pri-text').html('<span class="label-pri label-pri-' + value + '" title="' + value + '">' + value + '</span>');
    });
});

function refreshPlan()
{
    $('a.refresh').click();
}

$(window).unload(function(){
    if(blockID) window.parent.refreshBlock($('#block' + blockID));
});

$(document).ready(function()
{
    $('#gitlab').change(function()
    {
         host = $('#gitlab').val();
         if(host == '') return false;
         projects = '';
         $.each(gitlabProjects[host], function(id, obj){projects = projects + ',' + obj.gitlabProject});
         url = createLink('repo', 'ajaxgetgitlabprojects', "host=" + host + "&projects=" + projects);
    
         $.get(url, function(response)
         {
             $('#gitlabProject').html('').append(response);
             $('#gitlabProject').chosen().trigger("chosen:updated");;
         });

    });
}); 
