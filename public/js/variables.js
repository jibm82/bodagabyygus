/**
 * Javascript variables
 */

//RTL support
var rtl = false;                                //Set to true if your website is RTL. Otherwise, keep it false.

//ONE-PAGE NAVIGATION HIGHLIGHT
var onepage_nav = true;                         //If true, each menu item will highlight when scrolling to each respective section.

//MOBILE MENU TITLE
var mobile_menu_title = "Menu";                 //The title of the mobile menu.

//HERO FULLSCREEN VARIABLE
var hero_full_screen = true;                    //If true, the hero section will fit to screen size. If false, hero height will be the height of its content.

//HERO BACKGROUND SLIDESHOW IMAGES
var slidehow_images = [
    "/images/covers/hug.jpeg",
    // "https://lh3.google.com/pw/AM-JKLUEpWI-m3PvIsUTgnBzfAQcIKm6i-PLrNixHINZiztZQ9DqhrMh6WDpZ8PMq6aN9chOWqjqIsQDUT8IFZ0CW9mU4MfZ2U4=w730-h969-no?authuser=0",
    // "https://lh3.google.com/pw/AM-JKLVABpgthSG-FmxFoL3vfZPEjkduRv9dTHp3GGgNX0ICgWviT98VVQzwzXcibmz5yQVRHHfxtHObGeOE2hAHtC0JuykIGr0=w1137-h969-no?authuser=0",
    // "https://lh3.google.com/pw/AM-JKLUWhOoqvxYO_TeX5LXXaAwhyK0budK0MnUv8QkHC_b7EfDmBX9JGb6j1TsoTFZCrIg4h_Zdl3iI7TPZpml3wU3FnEGVbyQ=w1182-h970-no?authuser=0",
    // "https://photos.google.com/share/AF1QipO02vMMtObgT_qLFAo-a4LIzWvijPLOzzhrFj1w11fzXXU9tpzp5uei-Rh84wRIlw/photo/AF1QipOu1Gtgfk6hnIDZeo4yOpz9zpVWBwckbQdsK3e_?key=UzA0Z1FKU2pOeWFTQlREckZFWlNPRE5FMmljS0RR"
];

//TIMELINE PARALLAX
var timeline_parallax = true;                   //If false, the timeline items will not move on mousemove.


//CONTACT FORM VARIABLES
var contact_form_success_msg = "Form successfully submitted! :)";
var contact_form_error_msg = "Error sending message :(";
var contact_form_recaptcha_error_msg = "Error verifying reCaptcha!";


//COUNTDOWN VARIABLES
var c_days = "DAYS";                            //Countdown "Days" label
var c_hours = "HOURS";                          //Countdown "Hours" label
var c_minutes = "MIN.";                         //Countdown "Minutes" label
var c_seconds = "SEC.";                         //Countdown "Seconds" label
var countdown_end_msg = "Event Started!";       //Message to display when the countdown reaches the end


//GOOGLE MAP VARIABLES
var map_canvas_id = "map_canvas";               //The HTML "id" of the map canvas
var map_color = "#7e9fcd";                      //Google map color
var map_initial_zoom = 10;                      //The initial zoom when Google map loads
var map_initial_latitude = 19.841612;           //Google map initial Latitude. If "null", the latitude of the first marked will be used
var map_initial_longitude = -90.504570;        //Google map initial Longitude. If "null", the longitude of the first marked will be used
var use_default_map_style = false;              //If true, default map style will be used

//List of map markers
var map_markers = [
    {
        "title": "Ceremonia",
        "latitude": 19.841612,
        "longitude": -90.544570,
        "icon": "fas fa-bell", //Check the full list of icons at http://fortawesome.github.io/Font-Awesome/icons/
        "infoWindow": "<b>Iglesia de San Román</b><br/>Calle 10 S/N, Barrio de San Román<br/>San Francisco de Campeche, Campeche. CP 24040."
    },
    {
        "title": "Recepción",
        "latitude": 19.923523,
        "longitude": -90.403661,
        "icon": "fas fa-glass-cheers", //Check the full list of icons at http://fortawesome.github.io/Font-Awesome/icons/
        "infoWindow": "<b>Ex Hacienda Xtelchel</b><br/>Carretera Campeche - Mérida km. 12<br/>San Francisco de Campeche, Campeche. CP 24087."
    },
];
