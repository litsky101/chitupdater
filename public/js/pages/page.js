$(document).ready(function(){
    var btnLogout = $('#logout');
    var spinner = $('#loader');
    var chitUpload = $('#chitUploadLink');
    var members = $('#membersLink');
    var logo = $('#logoLink');

    btnLogout.on('click', function(){
        $.ajax({
            url: 'http://' + document.location.host + '/chitupdater/' + 'users/logout',
            type: 'POST',
            beforeSend: function(){
                spinner.show();
            },
            success: function(){
                window.location.href = 'http://' + document.location.host + '/chitupdater/' + 'pages/index'
            },
        }).completed(function(){
            spinner.hide();
        });
    });

    members.on('click', function(){
        $.ajax({
            url: 'http://' + document.location.host + '/chitupdater/' + 'pages/members',
            type: 'POST',
            beforeSend: function(){
                spinner.show();
            },
            success: function(){
                window.location.href = 'http://' + document.location.host + '/chitupdater/' + 'pages/members'
            },
        }).completed(function(){
            spinner.hide();
        });
    });

    chitUpload.on('click', function(){
        $.ajax({
            url: 'http://' + document.location.host + '/chitupdater/' + 'pages/chitupload',
            type: 'POST',
            beforeSend: function(){
                spinner.show();
            },
            success: function(){
                window.location.href = 'http://' + document.location.host + '/chitupdater/' + 'pages/chitupload'
            },
        }).completed(function(){
            spinner.hide();
        });
    });

    logo.on('click', function(){
        $.ajax({
            url: 'http://' + document.location.host + '/chitupdater/' + 'pages/index',
            type: 'POST',
            beforeSend: function(){
                spinner.show();
            },
            success: function(){
                window.location.href = 'http://' + document.location.host + '/chitupdater/' + 'pages/index'
            },
        }).completed(function(){
            spinner.hide();
        });
    });
});
