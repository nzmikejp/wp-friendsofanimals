
$(function(){
    
    //--- Nav Menu
    var isOpen = false
    
    var linkAnimationIn = anime({
        targets: '.menu-link',
        translateX: ['100%', 0],
        duration: 700,
        delay: anime.stagger(100),
        autoplay: false,
    
    })
    
    var linkAnimationOut = anime({
        targets: '.menu-link',
        translateX: [0, '100vw'],
        duration: 700,
        delay: anime.stagger(100),
        autoplay: false,
    })

    $('.nav-link').on('click',function(){

        if(isOpen == false){
            $('.menu-main').addClass('open')
            linkAnimationIn.play()
        
            isOpen = true

        }else {
            $('.menu-main').removeClass('open')
            linkAnimationOut.play()
                        
            isOpen = false
        }

    })

    $('.menu-link a').on('click', function(){
        $('.menu-main').removeClass('open')
        linkAnimationOut.play()
                        
        isOpen = false
    })

    //--- Swiper ---//
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        grabCursor: true,
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
        },
        autoplay:{
            delay: 8000,
        }
    })

    //--- Mixitup ---//
    $(function(){
        $('#Container').mixItUp({
            animation: {
                easing: 'cubic-bezier(0.645, 0.045, 0.355, 1)'
            }
        });
    });
    
    $('.taxonomy-item').on('click', function(){
        $('.taxonomy-item').removeClass('is-active');
        $(this).addClass('is-active')
    })


    //--- AOS ---//
    AOS.init({
        once: true,
    });

    //--- Leaflet Maps ---//

    if($('#mapid').length > 0){
        var path = $('#mapid').data('path')
        var mymap = L.map('mapid').setView([-40.893772, 174.980170], 18);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 30,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibnpqYXFwb3QiLCJhIjoiY2tienVrdDdwMWRycTM0bnhlZDA5ZHV5bCJ9.nbUPVtYE_pX89LEtmiWNUA'
        }).addTo(mymap);

        var myIcon = L.icon({
            iconUrl: path+'/assets/img/logo-small-map.png',
            iconSize: [48, 48],
        });
        
        L.marker([-40.893772, 174.980170], {icon: myIcon}).addTo(mymap);

    }
    



})