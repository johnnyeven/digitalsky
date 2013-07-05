function addFavorite()
{
   try{  
        if ( window.sidebar && 'object' == typeof( window.sidebar ) && 'function' == typeof( window.sidebar.addPanel ) ){  
            window.sidebar.addPanel(kdocTitle, window.location.href , '');  
        }  
        else if ( document.all && 'object' == typeof( window.external ) ){  
            window.external.addFavorite(window.location.href , kdocTitle);  
        }  
        else {  
            alert('您使用的浏览器不支持此功能，请按"Ctrl + D"键手工加入收藏');  
        }  
    }catch(e){  
        alert('您使用的浏览器不支持此功能，请按"Ctrl + D"键手工加入收藏');  
    }
}