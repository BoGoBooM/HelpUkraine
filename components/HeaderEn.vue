<template lang="pug">
header.header
    .header__bar
      a(href="#").header__bar-logo
        img(src="~/assets/img/logo.svg" alt="Логотип").logo
      ul.header__bar-list
        li.header__bar-list-item
          a(href="#about").header__bar-list-item-link About us
        li.header__bar-list-item
          a(href="#charity").header__bar-list-item-link Charity
        li.header__bar-list-item
          a(href="#forms").header__bar-list-item-link Other assistance
        li.header__bar-list-item
          a(href="#report").header__bar-list-item-link Reporting
        li.header__bar-list-item
          a(href="#faq").header__bar-list-item-link FAQ
        li.header__bar-list-item
          a(href="#contacts").header__bar-list-item-link Contacts
      .header__bar-menu
        a(href="#").header__bar-menu-button
          img(src="~/assets/img/crest.svg", alt=" Герб України").header__bar-menu-button-img
          span.header__bar-menu-button-text Support the Armed Forces of Ukraine(AFU)  
        a(type="button" @click="clickOnButton1").header__bar-menu-lang
          button.header__bar-menu-lang-btn(:class="{'active' : lang}")
            span.header__bar-menu-lang-btn-text EN
            .header__bar-menu-lang-btn-select(:class="{'active' : lang}")
              nuxt-link(to="/").header__bar-menu-lang-btn-select-ru UA
              nuxt-link(to="/pageRu").header__bar-menu-lang-btn-select-en RU
      .header__bar-tablet
        button( type="button" @click="clickOnButton").header__bar-tablet-btn 
          img(src="~/assets/img/menu.svg" alt="Меню").header__bar-tablet-btn-img
    .header__sideBar(:class="{'active' : modal}") 
      .header__sideBar-wrapper 
        ul.header__sideBar-wrapper-list
          li.header__sideBar-wrapper-list-item
            p.header__sideBar-wrapper-list-item-nav Menu:
            .header__sideBar-wrapper-list-item-btn(type="button" @click="clickOnButton") 
          li.header__sideBar-wrapper-list-item
            a(href="#about").header__sideBar-wrapper-list-item-link  About us
          li.header__sideBar-wrapper-list-item
            a(href="#charity").header__sideBar-wrapper-list-item-link  Charity
          li.header__sideBar-wrapper-list-item
            a(href="#forms").header__sideBar-wrapper-list-item-link  Other assistance
          li.header__sideBar-wrapper-list-item
            a(href="#report").header__sideBar-wrapper-list-item-link  Reporting
          li.header__sideBar-wrapper-list-item
            a(href="#faq").header__sideBar-wrapper-list-item-link  FAQ
          li.header__sideBar-wrapper-list-item
            a(href="#contacts").header__sideBar-wrapper-list-item-link  Contacts
        .header__sideBar-last
          .header__sideBar-last-wrapper( type="button" @click="clickOnButton1")
            a(href="#").header__sideBar-last-wrapper-lang(:class="{'active' : lang}") Language EN
              .header__sideBar-last-wrapper-lang-img(:class="{'active' : lang}")
            .header__sideBar-last-wrap(:class="{'active' : lang}")
              nuxt-link(to="/").header__sideBar-last-wrap-lang Мова UA
              nuxt-link(to="/pageRu").header__sideBar-last-wrap-lang Язык RU
        .header__sideBar-button 
          a(href="#").header__sideBar-button-link
            img(src="~/assets/img/crest.svg", alt=" Герб України").header__sideBar-button-link-img
            span.header__sideBar-button-link-text Support the Armed Forces of Ukraine(AFU)



</template>

<script>
export default {
  data() {
            return {
                modal: false,
                lang: false
                
            }
        },

        mounted() {
            console.log("Header");            
        },

        methods: {
            clickOnButton() {
               this.modal = ! this.modal
            },
            clickOnButton1() {
              this.lang = ! this.lang
            }
        },
    // data() {
    //         return {
    //             modal: false,
                
    //         }
    //     },

    //     mounted() {
    //         console.log("Header");            
    //     },

    //     methods: {
    //         clickOnButton() {
    //            if (this.modal) {
    //                 this.modal = false;
    //            } else {
    //                this.modal = true;
    //            }
    //         }
    //     },
}
</script>

<style lang="scss" scoped>

 * {
   font-family: "Greenwich";
   max-width: 100vw;
 }

 a {
   text-decoration: none;
   color: #fff;
 }
.header {
  width: 100vw;
  max-width: 100vw;

  &__sideBar {
    display: none;
    &-wrapper {
      position: relative;
    }
  }
  &__bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 24px 87px 24px 64px;
    background: #000;
    width: 100vw;
    position: fixed;
    border-radius: 0 0 20px 20px;
    z-index: 2;
    max-width: 100vw;

    &-tablet {
      display: none;
      background: #3F3F3F;
      padding: 17px 14px;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      &-btn {
        border: none;
        background: none;
        margin-top: -1px;
        margin-left: -6px;
        }

      
    }

    &-logo {
      margin-right: 30px;
    }

    &-list {
      display: flex;
      margin-right: 60px;

        &-item {
          margin-right: 40px;

            &-link:hover {
              color: #F9224B;
            }
        }
    }

    &-menu {
      display: flex;

      &-button {
      display: flex;
      align-items: center;
      background: #F9224B;
      border: none;
      padding: 16px 24px;
      border-radius: 5px ;
      margin-right: 40px;
      border: 1px solid #000;
      max-width: 310px;
      

        &-img {
          margin-right: 10px;
        }

        &-text {
          color: #fff;
        }

        &:hover {
          background: #000;
          border: 1px solid #F9224B;
        }
      }

      &-lang {
        display: flex;
        border: none;
        background: none;
        color: #fff;
        width: 33px;
        height: 15px;
        margin: auto;
        justify-content: center;

        &-btn {
          background: url("../assets/img/arrLangOp.svg") no-repeat 100% 68%;
          border: none;
          color: #fff;
          


          &:hover {
            color: #F9224B;
            background: url("../assets/img/arrLangCl.svg") no-repeat 100% 68%;
            }
          &.active {
            color: #F9224B;
            background: url("../assets/img/arrLangCl.svg") no-repeat 76% 68%;
          }
            &-select {
              display: none;
              &-ru {
                padding-top: 8px;
              }
              &-en {
                margin-top: 16px;
              }
              &.active {
                display: flex;
                flex-direction: column;
                background: #3F3F3F;
                width: 57px;
                height: 62px;
                border-radius: 5px;
              }
            }

          
        }
      }
    }
  }
  


}
.header__sideBar {
  display: none;
  width: 70vw;
  height: 100%;
  background: #101012;
  z-index: 3;
  position: fixed;
  top: 0;
  right: 0;
  transform: translateX(100%);
  transition: .7s ease;
  &.active {
    transform: translateX(0);
    transition: .7s ease;
    }
    &-wrapper {
      &-list {
        &-item {
          padding: 16px 0;
          border-bottom: 1px solid #3F3F3F;
          padding-left: 32px;
          display: flex;
          &-nav {
           color: #F9224B;
           font-size: 20px;
           margin-top: 24px;
          }
          &-btn {
            position: absolute;
            right: 40px;
            top: 20px;
            width: 50px;
	          height: 50px;
	          cursor: pointer;
            transition: opacity ease 0.5s;
            background: #F9224B;
            border-radius: 33px;
            &:hover {
              background: #fff;
            }
          &::before,
          &::after {
            position: absolute;
            top: 24px;
            left: 10px;
            content: '';
            display: block;
            width: 30px;
            height: 2px;
            background: #fff;
                                
            }
              &::before {
                transform: rotate(45deg);
                transition: rotare ease 0.5s;
              }
              &::after {
                transform: rotate(-45deg);
              }
              &:hover:after,
              &:hover:before {
                background: #F9224B;
                left: -1;
              }

          }
        }
      }
    }
  &-last {
    display: none;
    flex-direction: column;
    padding: 0 32px;
    background: radial-gradient(91.37% 141.18% at 14.31% 20.77%, rgba(140, 140, 140, 0.2) 0%, rgba(177, 185, 190, 0.0447917) 77.08%, rgba(134, 167, 198, 0) 100%);

    &-wrapper {
      margin: 16px 0;
      &-lang {
        display: flex;
        justify-content: space-between;
        margin-bottom: 16px;
        align-items: center;
        &.active {
          color: #F9224B;
        }
        &-img {
          background: url("~/assets/img/arrLangW.svg") no-repeat 100% 50%;
          width: 16px;
          height: 8px;
          &.hover {
            background: url("~/assets/img/arrLangR.svg") no-repeat 100% 50%;
          }
           &.active {
            background: url("~/assets/img/arrLangR.svg") no-repeat 100% 50%;
          }
        }
      }
    }
    &-wrap {
      display: none;
      &.active {
        display: flex;
        flex-direction: column;
      }
      &-lang {
        margin-bottom: 16px;
        &.hover {
          color: #F9224B;
        }
        
      }
    }
  }
  &-button {
    position: absolute;
    top: 150%;
    left: 10%;
    display: none;
    align-items: center;
    background: #F9224B;
    border: none;
    padding: 16px 24px;
    border-radius: 5px ;
    border: 1px solid #000;
    max-width: 88%;
    width: 80%;
    margin: auto;
    // margin-top: 200px;
    &-link {
      display: none;
      margin: auto;
      &-img {
        margin-right: 10px;
      }
    }
  }
}
@media screen and (min-width: 768px) and (max-width: 1439px){

.header {

  &__bar {
    
    
    &-logo {
      margin-right: 0;
    }

    &-list {
      display: none;
    }

    &-menu {
      

      &-button {
        margin-right: 0;
      }
      

      &-lang {
        display: none;
        &-btn {
          display: block;
          
        }
      }
    }
  &-tablet {
        display: block;
        &-btn {

          &-img {
          display: block;

          
          }
        }
        
      }
    
  }
}
.header__sideBar {
  display: block;
    

    
    &-button {
      display: flex;
      &-link {
            display: flex;
      }
    }
     &-last {
       display: flex;
       &-wrapper {
         &-lang {
           display: flex;
         }
       }
       &-lang {
         margin-bottom: 16px;
        
       }
     }
   }
 
  



}
@media screen and (min-width: 360px) and (max-width: 767px){
  .header {

  &__bar {

    &-list {
      display: none;
    }

    &-menu {
      display: none;
    }
  &-tablet {
        display: block;
        
      }
    
  }
}
.header__sideBar {
    display: block;
    &-button {
      display: block;
      max-width: 80%;
      margin: auto;
      left: 10%;
      top: 145%;
      &-link {
        display: flex;
        justify-content: center;
        align-items: center;
        &-text {
          font-size: 14px;
        }
      }
    }
     &-last {
      display: flex;
       &-wrapper {
         &-lang {
           &.active {
             display: flex;
           }
         }
       }
     }
   }


}
</style>