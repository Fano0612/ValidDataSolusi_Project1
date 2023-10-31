import React, { useState } from 'react';
import SearchBar from '../SearchBar/SearchBar';

function Navbar() {
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

    const toggleMenu = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    const toggleMobileMenu = () => {
        setIsMobileMenuOpen(!isMobileMenuOpen);
    };

    return ( <
        div >
        <
        nav className = "bg-gradient-to-r from-green-600 to-green-900" >
        <
        div className = "mx-auto max-w-7xl px-2 sm:px-6 lg:px-8" >
        <
        div className = "relative flex h-16 items-center justify-between" >
        <
        div className = "absolute inset-y-0 left-0 flex items-center sm:hidden" >
        <
        button type = "button"
        className = "relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
        aria - controls = "mobile-menu"
        aria - expanded = { isMobileMenuOpen }
        onClick = { toggleMobileMenu } >
        <
        span className = "absolute -inset-0.5" > < /span> <
        span className = "sr-only" > Open main menu < /span> <
        svg className = "block h-6 w-6"
        fill = "none"
        viewBox = "0 0 24 24"
        strokeWidth = "1.5"
        stroke = "currentColor"
        aria - hidden = "true" >
        <
        path strokeLinecap = "round"
        strokeLinejoin = "round"
        d = "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" / >
        <
        /svg> <
        svg className = "hidden h-6 w-6"
        fill = "none"
        viewBox = "0 0 24 24"
        strokeWidth = "1.5"
        stroke = "currentColor"
        aria - hidden = "true" >
        <
        path strokeLinecap = "round"
        strokeLinejoin = "round"
        d = "M6 18L18 6M6 6l12 12" / >
        <
        /svg> <
        /button> <
        /div> <
        div className = "flex flex-1 items-center justify-center sm:items-stretch sm:justify-start" >
        <
        div className = "flex flex-shrink-0 items-center" >
        <
        img className = "h-8 w-auto rounded-full"
        src = "https://img.freepik.com/premium-vector/wing-pin-point-colorful-logo-design_65959-286.jpg?w=2000"
        alt = "Your Company" /
        >
        <
        /div> <
        div className = "hidden sm:ml-6 sm:block" >
        <
        div className = "flex space-x-4" >
        <
        a href = "#"
        className = "bg-yellow-600 text-white rounded-md px-3 py-2 text-sm font-medium"
        aria - current = "page" >
        Dashboard <
        /a> <
        a href = "#"
        className = "text-gray-300 hover:bg-yellow-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >
        Team <
        /a> <
        a href = "#"
        className = "text-gray-300 hover:bg-yellow-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >
        Projects <
        /a> <
        a href = "#"
        className = "text-gray-300 hover:bg-yellow-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >
        Calendar <
        /a> <
        /div> <
        /div> <
        SearchBar / >
        <
        div className = "absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" >
        <
        button type = "button"
        className = "relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
        onClick = { toggleMenu } >
        <
        span className = "absolute -inset-1.5" > < /span> <
        span className = "sr-only" > View notifications < /span> <
        svg className = "h-6 w-6"
        fill = "none"
        viewBox = "0 0 24 24"
        strokeWidth = "1.5"
        stroke = "currentColor"
        aria - hidden = "true" >
        <
        path strokeLinecap = "round"
        strokeLinejoin = "round"
        d = "M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" > < /path> <
        /svg> <
        /button> <
        div className = "relative ml-3" >
        <
        div >
        <
        button type = "button"
        className = "relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
        id = "user-menu-button"
        aria - expanded = { isMenuOpen }
        aria - haspopup = "true"
        onClick = { toggleMenu } >
        <
        span className = "absolute -inset-1.5" > < /span> <
        span className = "sr-only" > Open user menu < /span> <
        img className = "h-8 w-8 rounded-full"
        src = "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOj12MDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
        alt = "" /
        >
        <
        /button> <
        /div> {
            isMenuOpen && ( <
                div className = "absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" >
                <
                a href = "#"
                className = "block px-4 py-2 text-sm text-gray-700"
                role = "menuitem"
                tabIndex = "-1" >
                Your Profile <
                /a> <
                a href = "#"
                className = "block px-4 py-2 text-sm text-gray-700"
                role = "menuitem"
                tabIndex = "-1" >
                Settings <
                /a> <
                a href = "#"
                className = "block px-4 py-2 text-sm text-gray-700"
                role = "menuitem"
                tabIndex = "-1" >
                Sign out <
                /a> <
                /div>
            )
        } <
        /div> <
        /div> <
        /div> <
        div className = "absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" >
        <
        button type = "button"
        className = "relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white lg:hidden md:hidden sm:hidden"
        aria - controls = "mobile-menu"
        aria - expanded = { isMobileMenuOpen }
        onClick = { toggleMobileMenu } >
        <
        span className = "sr-only" > Open main menu < /span> {
            isMobileMenuOpen ? ( <
                svg className = "block h-6 w-6"
                fill = "none"
                viewBox = "0 0 24 24"
                strokeWidth = "1.5"
                stroke = "currentColor"
                aria - hidden = "true" >
                <
                path strokeLinecap = "round"
                strokeLinejoin = "round"
                d = "M6 18L18 6M6 6l12 12" / >
                <
                /svg>
            ) : ( <
                svg className = "block h-6 w-6"
                fill = "none"
                viewBox = "0 0 24 24"
                strokeWidth = "1.5"
                stroke = "currentColor"
                aria - hidden = "true" >
                <
                path strokeLinecap = "round"
                strokeLinejoin = "round"
                d = "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" / >
                <
                /svg>
            )
        } <
        /button> <
        /div> <
        div className = "sm:hidden"
        id = "mobile-menu" >
        <
        div className = { `space-y-1 px-2 pb-3 pt-2 ${isMobileMenuOpen ? 'block' : 'hidden'}` } >
        <
        a href = "#"
        className = "bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
        aria - current = "page" >
        Dashboard <
        /a> <
        a href = "#"
        className = "text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium" >
        Team <
        /a> <
        a href = "#"
        className = "text-gray-300 hover-bg-gray-700 hover-text-white block rounded-md px-3 py-2 text-base font-medium" >
        Projects <
        /a> <
        a href = "#"
        className = "text-gray-300 hover-bg-gray-700 hover-text-white block rounded-md px-3 py-2 text-base font-medium" >
        Calendar <
        /a> <
        /div> <
        /div> <
        /div> <
        /div> <
        /nav> <
        /div>
    );
}

export default Navbar;