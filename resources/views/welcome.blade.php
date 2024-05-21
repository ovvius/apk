<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="asset/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    
    
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Home</span>
                <span class="ion-ios-search pull-right"></span>
                <div class="search">
                    <form method="post">
                        <input type="search" placeholder="Search Here">
                    </form>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-overlay"></div>
                <div class="sidebar-content">
                    <div class="top-head">
                        <div class="name">Mohan Khadka</div>
                        <div class="email">contact@mohankhadka.com.np</div>
                    </div>
                    <div class="nav-left">
                        <a href="#home"><span class="ion-ios-home-outline"></span> Home</a>
                        <a href="#alarm"><span class="ion-ios-list-outline"></span> Alarm</a>
                        <a href="#compose"><span class="ion-ios-compose-outline"></span> Compose</a>
                        <a href="#chats"><span class="ion-ios-chatboxes-outline"></span> Chats</a>
                        <a href="#profile"><span class="ion-ios-person-outline"></span> Profile</a>
                        <a href="#settings"><span class="ion-ios-gear-outline"></span> Settings</a>
                        <a href="#credits"><span class="ion-ios-information-outline"></span> Credits</a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="html search">
                    <div class="title bounceInDown animated">Search Result</div>
                    <p class="flipInX animated">Sorry,<br>no matches found for <b class="key"></b></p>
                </div>
                <div class="html welcome visible">
                    <div class="datetime">
                        <div class="day lightSpeedIn animated">Thursday</div>
                        <div class="date lightSpeedIn animated">June 18, 2015</div>
                        <div class="time lightSpeedIn animated">08:00 AM</div>
                    </div>
                </div>
                <div class="html alarm">
                    <div class="forecast clearfix">
                        <div class="datetime pull-left bounceInLeft animated">
                            <div class="day">Thursday</div>
                            <div class="date">June 18, 2015</div>
                        </div>
                        <div class="temperature pull-right bounceInRight animated">
                            <div class="unit"><span class="ion-ios-sunny-outline"></span> 34<i>&deg;</i></div>
                            <div class="location">Kathmandu, Nepal</div>
                        </div>
                    </div>
                    <div class="alarm-list">
                        <div class="note clearfix slideInRight animated">
                            <div class="time pull-left">
                                <div class="hour">9</div>
                                <div class="shift">AM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Finish HTML Coding</div>
                                <div class="subject">Web UI</div>
                            </div>
                        </div>
                        <div class="note clearfix slideInRight animated">
                            <div class="time pull-left">
                                <div class="hour">1</div>
                                <div class="shift">PM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Lunch Break</div>
                                <div class="subject"></div>
                            </div>
                        </div>
                        <div class="note clearfix slideInRight animated" data-revert="slideOutRight">
                            <div class="time pull-left">
                                <div class="hour">3</div>
                                <div class="shift">PM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Design Stand Up</div>
                                <div class="subject">Hangouts</div>
                                <div class="user-list clearfix">
                                    <div class="user pull-left"><img src="https://raw.githubusercontent.com/khadkamhn/secret-project/master/img/usr-i.png"></div>
                                    <div class="user pull-left"><img src="https://raw.githubusercontent.com/khadkamhn/secret-project/master/img/usr-ii.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="html compose">
                    <div class="forms">
                        <div class="group clearfix slideInRight animated">
                            <label class="pull-left" for="compose-time"><span class="ion-ios-time-outline"></span> Time</label>
                            <input class="pull-right" id="compose-time" type="time">
                        </div>
                        <div class="group clearfix slideInLeft animated">
                            <label class="pull-left" for="compose-date"><span class="ion-ios-calendar-outline"></span> Date</label>
                            <input class="pull-right" id="compose-date" type="date">
                        </div>
                        <div class="group clearfix slideInRight animated">
                            <label class="pull-left" for="compose-title"><span class="ion-ios-paper-outline"></span> Title</label>
                            <input class="pull-right" id="compose-title" type="text">
                        </div>
                        <div class="group clearfix slideInLeft animated">
                            <label class="visible" for="compose-detail"><span class="ion-ios-list-outline"></span> Task</label>
                            <textarea class="visible" id="compose-detail" rows="3"></textarea>
                        </div>
                        <div class="action flipInY animated">
                            <button class="btn">Compose</button>
                        </div>
                    </div>
                </div>
                <div class="html chats">
                    <div class="tabs-list clearfix">
                        <a href="#" class="tab active">Users</a>
                        <a href="#" class="tab">Messages</a>
                        <a href="#" class="tab">Groups</a>
                    </div>
                    <div class="active-users">
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/99.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Connor Hartigan</p>
                                <p class="position">Web &amp; UI Designer</p>
                            </div>
                            <div class="idle pull-right"><span class="away"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/89.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Jacob Lennon</p>
                                <p class="position">Front-End Developer</p>
                            </div>
                            <div class="idle pull-right"><span class="offline"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/79.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Didier Mailly</p>
                                <p class="position">Co-Founder</p>
                            </div>
                            <div class="idle pull-right"><span class="away"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/69.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Miguel Cunha Ferreira</p>
                                <p class="position">Sales Manager</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/59.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Eric Yuriev</p>
                                <p class="position">App Developer</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/49.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Theodore Clark</p>
                                <p class="position">Project Manager</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                    </div>
                </div>
                <div class="html settings">
                    <div class="setting-list">
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left">General</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left"><label for="gear-notice">Notification</label></div>
                            <div class="action pull-right"><input id="gear-notice" class="on-off" type="checkbox"><label for="gear-notice"></label></div>
                        </div>
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left"><label for="gear-sound">Sound</label></div>
                            <div class="action pull-right"><input id="gear-sound" class="on-off" type="checkbox" checked><label for="gear-sound"></label></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left">Theme</div>
                            <div class="action pull-right">Standard <span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left">Support</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left">Privacy</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
                <div class="html profile">
                    <div class="photo flipInX animated">
                        <img src="https://raw.githubusercontent.com/khadkamhn/secret-project/master/img/mohan.png">
                        <div class="social">
                            <a href="https://facebook.com/khadkamhn" class="soc-item soc-count-1"><span class="ion-social-facebook"></span></a>
                            <a href="https://twitter.com/khadkamhn" class="soc-item soc-count-2"><span class="ion-social-twitter"></span></a>
                            <a href="https://github.com/khadkamhn" class="soc-item soc-count-3"><span class="ion-social-github"></span></a>
                            <a href="https://pinterest.com/khadkamhn" class="soc-item soc-count-4"><span class="ion-social-pinterest"></span></a>
                            <a href="https://np.linkedin.com/in/khadkamhn" class="soc-item soc-count-5"><span class="ion-social-linkedin"></span></a>
                            <a href="https://codepen.io/khadkamhn" class="soc-item soc-count-6"><span class="ion-social-codepen"></span></a>
                            <a href="skype:khadkamhn?userinfo" class="soc-item soc-count-7"><span class="ion-social-skype"></span></a>
                            <a href="http://dribbble.com/khadkamhn" class="soc-item soc-count-8"><span class="ion-social-dribbble"></span></a>
                        </div>
                    </div>
                    <div class="details">
                        <p class="heading flipInY animated">
                            <span class="name">Mohan Khadka</span><span class="position">Web/Graphic Desiger</span>
                        </p>
                        <p class="text fadeInUp animated">Hi, It's me Mohan from Nepal. I'm a web and graphics designer. Designing is my passion and I am still learning and developing my skills on graphics designing and coding. I have been working on various designing projects.</p>
                    </div>
                </div>
                <div class="html credits">
                    <div class="title flipInY animated">I have been using the following assets to build this design</div>
                    <div class="credit-ol">
                        <div class="credit-li lightSpeedIn animated"><a href="https://www.google.com/fonts/specimen/Roboto" target="_blank">roboto</a> <span>for typography</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="https://jquery.com" target="_blank">jquery</a> <span>for design/ui</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="http://ionicons.com/" target="_blank">ionicons</a> <span>for icons</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="http://uifaces.com/authorized" target="_blank">ui faces</a> <span>for avatar</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a> <span>for animation</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="https://dribbble.com/shots/1928064-Secret-Project" target="_blank">concept of design</a> <span>for layout</span></div>
                        <div class="credit-li lightSpeedIn animated"><a href="https://unsplash.com/photos/6asyCyR0K1Q/download" target="_blank">unsplash.com</a> <span>for background</span></div>
                    </div>
                    <div class="text zoomInUp animated">I'm glad for using these resources and expecting same as time ahead</div>
                </div>
            </div>
            <div class="nav">
                <a href="#profile" class="nav-item nav-count-1"><i class="ion-ios-person-outline"></i><span class="invisible">Profile</span></a>
                <a href="#compose" class="nav-item nav-count-2"><i class="ion-ios-compose-outline"></i><span class="invisible">Compose</span></a>
                <a href="#chats" class="nav-item nav-count-3"><i class="ion-ios-chatboxes-outline"></i><span class="invisible">Chats</span></a>
                <a href="#alarm" class="nav-item nav-count-4"><i class="ion-ios-alarm-outline"></i><span class="invisible">Alarm</span></a>
                <a href="#toggle" class="mask"><i class="ion-ios-plus-empty"></i></a>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            App.init();
        });
        var App = {
            init: function() {
                this.datetime(), this.side.nav(), this.search.bar(), this.navigation(), this.hyperlinks(), setInterval("App.datetime();", 1e3)
            },
            datetime: function() {
                var e = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"),
                t = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"),
                a = new Date,
                i = a.getYear();
                1e3 > i && (i += 1900);
                var s = a.getDay(),
                n = a.getMonth(),
                r = a.getDate();
                10 > r && (r = "0" + r);
                var l = a.getHours(),
                c = a.getMinutes(),
                h = a.getSeconds(),
                o = "AM";
                l >= 12 && (o = "PM"), l > 12 && (l -= 12), 0 == l && (l = 12), 9 >= c && (c = "0" + c), 9 >= h && (h = "0" + h), $(".welcome .datetime .day").text(e[s]), $(".welcome .datetime .date").text(t[n] + " " + r + ", " + i), $(".welcome .datetime .time").text(l + ":" + c + ":" + h + " " + o)
            },
            title: function(e) {
                return $(".header>.title").text(e)
            },
            side: {
                nav: function() {
                    this.toggle(), this.navigation()
                },
                toggle: function() {
                    $(".ion-ios-navicon").on("touchstart click", function(e) {
                        e.preventDefault(), $(".sidebar").toggleClass("active"), $(".nav").removeClass("active"), $(".sidebar .sidebar-overlay").removeClass("fadeOut animated").addClass("fadeIn animated")
                    }), $(".sidebar .sidebar-overlay").on("touchstart click", function(e) {
                        e.preventDefault(), $(".ion-ios-navicon").click(), $(this).removeClass("fadeIn").addClass("fadeOut")
                    })
                },
                navigation: function() {
                    $(".nav-left a").on("touchstart click", function(e) {
                        e.preventDefault();
                        var t = $(this).attr("href").replace("#", "");
                        $(".sidebar").toggleClass("active"), $(".html").removeClass("visible"), "home" == t || "" == t || null == t ? $(".html.welcome").addClass("visible") : $(".html." + t).addClass("visible"), App.title($(this).text())
                    })
                }
            },
            search: {
                bar: function() {
                    $(".header .ion-ios-search").on("touchstart click", function() {
                        var e = ($(".header .search input").hasClass("search-visible"), $(".header .search input").val());
                        return "" != e && null != e ? (App.search.html($(".header .search input").val()), !1) : ($(".nav").removeClass("active"), $(".header .search input").focus(), void $(".header .search input").toggleClass("search-visible"))
                    }), $(".search form").on("submit", function(e) {
                        e.preventDefault(), App.search.html($(".header .search input").val())
                    })
                },
                html: function(e) {
                    $(".search input").removeClass("search-visible"), $(".html").removeClass("visible"), $(".html.search").addClass("visible"), App.title("Result"), $(".html.search").html($(".html.search").html()), $(".html.search .key").html(e), $(".header .search input").val("")
                }
            },
            navigation: function() {
                $(".nav .mask").on("touchstart click", function(e) {
                    e.preventDefault(), $(this).parent().toggleClass("active")
                })
            },
            hyperlinks: function() {
                $(".nav .nav-item").on("click", function(e) {
                    e.preventDefault();
                    var t = $(this).attr("href").replace("#", "");
                    $(".html").removeClass("visible"), $(".html." + t).addClass("visible"), $(".nav").toggleClass("active"), App.title($(this).text())
                })
            }
        };
    </script>
</body>
</html>
