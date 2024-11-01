function wpmlc_show_lang(show_id, hide_class, active_flag, no_active_flags)
{
    var elements = document.getElementsByTagName('*');
    no_active_flags += '_';
    for (var i = 0; i < elements.length; i++)
    {
        var element = elements[i];
        if (element.className.indexOf(hide_class) != -1)
        {
            element.style.display = "none";
        }
        if (element.className.indexOf(no_active_flags) != -1)
        {
            element.style.border = "3px solid #FFFFFF"
        }
    }
    document.getElementById(active_flag).style.border = "3px solid #87DE87";
    document.getElementById(show_id).style.display = "block";
}

function wpmlc_show_default_language(default_lang)
{
    var elements = document.getElementsByTagName('*');
    var wpmlc_reg = '_' + default_lang;
    var wpmlc_reg_flag = 'wpmlc_flag_'
    for (var i = 0; i < elements.length; i++)
    {
        var element = elements[i];
        if (element.className.indexOf('wpmlc_flags') == -1)
        {
            if (element.className.indexOf('wpmlc_text') != -1)
            {
                element.style.display = "none";
            }
        }
        if (element.className.indexOf(wpmlc_reg) != -1)
        {
            if (element.className.indexOf('wpmlc_flag') == -1)
            {
                element.style.display = "block";
            }
        }
        if (element.className.indexOf(wpmlc_reg_flag) != -1)
        {
            if (element.className.indexOf(wpmlc_reg) != -1)
            {
                element.style.border = "3px solid #87DE87";
            }
        }
    }
}
