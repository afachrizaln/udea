(function(){
    // Don't go any further down the script if [data-notification] is not set.
    if (!document.body.dataset.notification)
        return false;
    
    var toast_type = document.body.dataset.notificationType;
    var toast_text = JSON.parse(document.body.dataset.notificationMessage);
    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-bottom-right",
        "progressBar": true,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "3000",
    };
    switch (toast_type) {
        case 'error':
        toastr["error"](toast_text, "Terjadi Kesalahan!")
        break;

        case 'info':
        toastr["info"](toast_text, "Info!")
        break;

        case 'success':
        toastr["success"](toast_text, "Berhasil!")
        break;
    }
})();

$('#pcoded').pcodedmenu({ 
    themelayout: 'vertical', 
    verticalMenuplacement: 'left', 
    verticalMenulayout: 'wide', 
    MenuTrigger: 'click', 
    SubMenuTrigger: 'click', 
    activeMenuClass: 'active', 
    ThemeBackgroundPattern: 'theme2', 
    HeaderBackground: 'theme2', 
    LHeaderBackground: 'theme2', 
    NavbarBackground: 'themelight1', 
    ActiveItemBackground: 'theme2', 
    freamtype: 'theme2', 
    SubItemBorder: false, 
    DropDownIconStyle: 'style1', 
    menutype: 'st2', 
    layouttype: 'light', 
    FixedNavbarPosition: true, 
    FixedHeaderPosition: true, 
    collapseVerticalLeftHeader: true, 
    VerticalSubMenuItemIconStyle: 'style3', 
    VerticalNavigationView: 'view1', 
    verticalMenueffect: { 
    desktop: 'shrink', 
    tablet: 'overlay', 
    phone: 'overlay', 
    }, 
    defaultVerticalMenu: { 
    desktop: 'expanded', 
    tablet: 'offcanvas', 
    phone: 'offcanvas', 
    }, 
    onToggleVerticalMenu: { 
    desktop: 'collapsed', 
    tablet: 'expanded', 
    phone: 'expanded', 
    }, 
});

// $('#calendar').fullCalendar({
//     // aspectRatio: 10
// });