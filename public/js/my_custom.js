(function(){
		
    // Don't go any further down the script if [data-notification] is not set.
    if (!document.body.dataset.notification)
        return false;
    
    var type = document.body.dataset.notificationType;
    var opts = {
        text: JSON.parse(document.body.dataset.notificationMessage),
    };
    switch (type) {
        case 'error':
        opts.type = 'error';
        opts.title = "Terjadi Kesalahan!";
        opts.icon = "icofont icofont-close-circled",
        opts.addclass = "translucent stack-bottom-right bg-danger";
        opts.delay = 4000;
        break;

        case 'info':
        opts.type = 'info';
        opts.title = "Info";
        opts.icon = "icofont icofont-info-circle",
        opts.addclass = "translucent stack-bottom-right bg-info";
        opts.delay = 4000;
        break;

        case 'success':
        opts.type = 'success';
        opts.title = "Berhasil";
        opts.icon = "icofont icofont-check-circled",
        opts.addclass = "translucent stack-bottom-right bg-primary";
        opts.delay = 4000;
        break;
    }
    new PNotify(opts);
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