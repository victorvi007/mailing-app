$(document).ready(function() {

    });
    $('.mobileMenu').hide();
    $('.addEmail').hide();
    $('.chooseTemplate').hide();

    $('.openMenu').click(()=>{
        $('.mobileMenu').show();
    })
    $('.closeMenu').click(()=>{
        $('.mobileMenu').hide();
    })

    $('.showAddEmail').click(()=>{
        $('.addEmail').show();
    })
    $('.hideAddEmail').click(()=>{
        $('.addEmail').hide();
    })


    $('.showChooseTemplate').click(()=>{
        $('.chooseTemplate').show();
    })
    $('.hideChooseTemplate').click(()=>{
        $('.chooseTemplate').hide();
    })

