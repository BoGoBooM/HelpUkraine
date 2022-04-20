<template lang="pug">
footer.footer
    .footer__wrapper
        p.footer__wrapper-title Copyright © 2022 «<span class="footer__wrapper-title-yellow">U</span><span class="footer__wrapper-title-blue">A</span>charity»
        ul.footer__wrapper-list 
            li.footer__wrapper-list-item
                p.footer__wrapper-list-item-text Дизайн: 
                a(href="https://www.instagram.com/artem.il_dsgn/").footer__wrapper-list-item-link  ILDesign
            li.footer__wrapper-list-item
                p.footer__wrapper-list-item-text Розробка:
                a(href="https://www.instagram.com/bogoboom/").footer__wrapper-list-item-link BoGoBooM
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    * {
        color: #fff;
        font-family: "Greenwich";
        background: #000;
        max-width: 100vw;
    }
    .footer {
        border-radius: 20px 20px 0px 0px;
        padding: 40px 64px;
        &__wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            &-title {
                font-family: "Greenwich-Med";
                // font-size: 20px;
                &-yellow {
                    color: #ffc32b;
                    font-family: "Greenwich-Med";
                    font-weight: 600;
                }
                &-blue {
                    color: #5b7fff;
                    font-family: "Greenwich-Med";
                    font-weight: 600;
                }
            }
            &-list {

                &-item {
                    display: flex;
                    &:not(:last-child) {
                            margin-bottom: 10px;
                        }
                    &-text {
                        margin-right: 5px;
                        
                    }
                    &-link {
                        color: #F9224B;
                        font-family: 'Greenwich';
                        &:hover {
                            text-decoration: none;
                        }
                    }
                }
            }
        }
    }
@media screen and (min-width: 768px) and (max-width: 1439px){
.footer {
    padding: 24px 44px;
        &__wrapper {
            &-title {
                font-size: 12px;
                &-yellow {
                }
                &-blue {
                }
            }
            &-list {

                &-item {
                    &:not(:last-child) {
                        }
                    &-text {
                        font-size: 12px;
                    }
                    &-link {
                        font-size: 12px;
                        &:hover {
                        }
                    }
                }
            }
        }
    }
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .footer {
    padding: 16px 16px;
        &__wrapper {
            &-title {
                font-size: 12px;
                &-yellow {
                }
                &-blue {
                }
            }
            &-list {

                &-item {
                    &:not(:last-child) {
                        margin-bottom: 5px;
                        }
                    &-text {
                        font-size: 12px;
                    }
                    &-link {
                        font-size: 12px;
                        &:hover {
                        }
                    }
                }
            }
        }
    }
}
</style>