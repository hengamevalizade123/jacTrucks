"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // Your custom JavaScript goes here
    // hambergur menue
    var hamburger = document.querySelector('.js-hamburger');
    var hamburgerMenu = function hamburgerMenu() {
      document.querySelector('#mask').classList.toggle('show');
      document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
      document.querySelector('.js-navs').classList.toggle('is-open');
    };
    if (hamburger) {
      hamburger.addEventListener('click', hamburgerMenu, false);
    }
    // close menu side mobile
    var closeHamburger = document.querySelector('#close-side-nav');
    var closeHamburgerMenu = function closeHamburgerMenu() {
      document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
      document.querySelector('#mask').classList.toggle('show');
      document.querySelector('.js-navs').classList.toggle('is-open');
    };
    if (closeHamburger) {
      closeHamburger.addEventListener('click', closeHamburgerMenu, false);
    }
    var mask = document.querySelector('#mask');
    if (mask) {
      mask.addEventListener('click', closeHamburgerMenu, false);
    }
    // collapse frequency question box
    var accordionItemHeaders = document.querySelectorAll('.c-faq__accordion-item-header');
    accordionItemHeaders.forEach(function (accordionItemHeader) {
      accordionItemHeader.addEventListener('click', function (event) {
        accordionItemHeader.classList.toggle('active');
        accordionItemHeader.parentElement.classList.toggle('active-faq');
        accordionItemHeader.getElementsByClassName('plus-minus-toggle')[0].classList.toggle('collapsed');

        // console.log(accordionItemHeader.querySelectorAll(".plus-minus-toggle").classList.toggle("collapsed"));
        //
        var accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains('active')) {
          accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + 'px';
        } else {
          accordionItemBody.style.maxHeight = 0;
        }
      });
    });

    // info tabs

    var tabs = document.querySelectorAll('.c-info__tab-nav');
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function (event) {
        for (var j = 0; j < tabs.length; j++) {
          tabs[j].classList.remove('active-nav-tab');
        }
        tab.classList.add('active-nav-tab');
        var tabList = document.querySelectorAll('.c-info__tab-content');
        for (var i = 0; i < tabList.length; i++) {
          document.querySelectorAll('.c-info__tab-content')[i].classList.remove('active-tab');
          console.log('tabList');
        }
        document.getElementById(tab.getAttribute('data-tab')).classList.add('active-tab');
      });
    });

    // convert number to persian number
    var numbers = document.querySelectorAll('.persian-number');
    numbers.forEach(function (number) {
      toPersianNum(number.textContent, number);
    });
    function toPersianNum($number, $element) {
      $number = $number.replace('1', '۱');
      $number = $number.replace('2', '۲');
      $number = $number.replace('3', '۳');
      $number = $number.replace('4', '۴');
      $number = $number.replace('5', '۵');
      $number = $number.replace('6', '۶');
      $number = $number.replace('7', '۷');
      $number = $number.replace('8', '۸');
      $number = $number.replace('9', '۹');
      $number = $number.replace('0', '۰');
      $element.textContent = '';
      $element.textContent += $number;
    }
  });
})();

// jQuery