$(function() {

	var app_id = '1612890412261644';
	var scopes = 'email, user_friends, user_online_presence';

	var btn_login = '<a href="#" id="login" class="btn btn-primary">Iniciar sesión</a>';

	var div_session = "<div id='facebook-session'>"+
					  "<h3><strong></strong><h3>"+
					  "<img>"+
            "<a hrek='#' id='links'></a>"+
					  "<a href='#' id='logout' class='btn btn-danger'>Cerrar sesión</a>"+
					  "</div>";

	window.fbAsyncInit = function() {

	  	FB.init({
	    	appId      : app_id,
	    	status     : true,
	    	cookie     : true, 
	    	xfbml      : true, 
	    	version    : 'v2.3'
	  	});


	  	FB.getLoginStatus(function(response) {
	    	statusChangeCallback(response, function() {});
	  	});
  	};

  	var statusChangeCallback = function(response, callback) {
  		console.log(response);
    	if (response.status === 'connected') {
      		getFacebookData();
    	} else {
     		callback(false);
    	}
  	}

  	var checkLoginState = function(callback) {
    	FB.getLoginStatus(function(response) {
      		callback(response);
    	});
  	}

  	var getFacebookData =  function() {
      FB.api('/me', function(response) {
        $('#login').after(div_session);
        $('#login').remove();
        $('#facebook-session strong').text('Bienvenido'+'br');
        $('#facebook-session strong').text(response.name);
        $('#facebook-session img').attr('src','http://graph.facebook.com/'+response.id+'/picture?type=large');
        $('#links').text(response.link);
      });
    }

  	var facebookLogin = function() {
  		checkLoginState(function(data) {
  			if (data.status !== 'connected') {
  				FB.login(function(response) {
  					if (response.status === 'connected')
  						getFacebookData();
  				}, {scope: scopes});
  			}
  		})
  	}


function creaAmigos() {

    FB.api('/me/friends', function(response) {
        if(response.data) {

           for(i=0;i<response.data.length;i++)
            {
           jQuery('#lista_amigos').append('<div class="amigos">'+
            '<img src="https://graph.facebook.com/'+response.data[i].id+'/picture"/>'+
          '<h3>'+response.data[i].name+'</h3>'+
          '</div>');  
            }
         
        } else {
            console.log('Error al obtener amigos');
        }
    });
}

  	var facebookLogout = function() {
  		checkLoginState(function(data) {
  			if (data.status === 'connected') {
				FB.logout(function(response) {
					$('#facebook-session').before(btn_login);
					$('#facebook-session').remove();
				})
			}
  		})

  	}



  	$(document).on('click', '#login', function(e) {
  		e.preventDefault();

  		facebookLogin();
  	})

  	$(document).on('click', '#logout', function(e) {
  		e.preventDefault();

  		if (confirm("¿Está seguro?"))
  			facebookLogout();
  		else 
  			return false;
  	})

})