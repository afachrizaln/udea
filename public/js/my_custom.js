$('#pcoded').pcodedmenu({ 
    themelayout: 'vertical', 
    verticalMenuplacement: 'left', 
    verticalMenulayout: 'wide', 
    MenuTrigger: 'click', 
    SubMenuTrigger: 'click', 
    activeMenuClass: 'active', 
    ThemeBackgroundPattern: 'theme1', 
    HeaderBackground: 'theme6', 
    LHeaderBackground: 'theme6', 
    NavbarBackground: 'themelight1', 
    ActiveItemBackground: 'theme6', 
    freamtype: 'theme6', 
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

$('#calendar').fullCalendar({
    // aspectRatio: 10
});