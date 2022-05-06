<template lang="pug">
section.fifth(id="forms")
    .fifth__wrapper
        h2.fifth__wrapper-title Имеешь возможность помочь или сам нуждаешься в помощи?
        ul.fifth__wrapper-list 
            li.fifth__wrapper-list-item 
                button(type="button" @click="clickOnButton" ).fifth__wrapper-list-item-btn(:class="{'active' : ! modal}") Хочу помочь
            li.fifth__wrapper-list-item 
                button(type="button" @click="clickOnButton" ).fifth__wrapper-list-item-btn(:class="{'active' : modal}") Нуждаюсь в помощи
        .fifth__wrapper-wrap(:class="{'active' : modal}" )
            form(action="telegramRuNeed.php" method="POST").fifth__wrapper-wrap-form
                input(type="text" placeholder="Ваше имя *" name="user_name" required).fifth__wrapper-wrap-form-name
                .fifth__wrapper-wrap-form-menu
                    a.fifth__wrapper-wrap-form-menu-contry
                        img(src="~/assets/img/Ua.svg" alt="Номер країни").fifth__wrapper-wrap-form-menu-contry-img
                        //- img(src="~/assets/img/arrNumb.svg" alt="").fifth__wrapper-wrap-form-menu-contry-arrow
                    input(type="tel" placeholder="+380 (99) 999-99-99 *"  minlength="10" maxlength="20" name="user_phone" required).fifth__wrapper-wrap-form-menu-phone
                input(type="text" placeholder="Ваш Email" name="user_email").fifth__wrapper-wrap-form-email
                input(type="text" placeholder="Ваш город *" name="user_locate" required).fifth__wrapper-wrap-form-city
                input(type="text" placeholder="Чем вам нужно помочь?" name="user_need" ).fifth__wrapper-wrap-form-help
                .fifth__wrapper-wrap-form-submit 
                    input(type="submit" value="Отправить").fifth__wrapper-wrap-form-submit-btn
                    p.fifth__wrapper-wrap-form-submit-confid Нажимая кнопку «отправить» я согласен на обработку персональных данных
            .fifth__wrapper-wrap-info
                p.fifth__wrapper-wrap-info-text Если вы оказались в затруднительном положении, обратитесь к нам, опишите вашу проблему, и мы сделаем все возможное, чтобы помочь вам!
                p.fifth__wrapper-wrap-info-text Вы обязательно будете услышаны, ведь только помогая друг другу, мы победим врага!
                img(src="~/assets/img/photo6.png" alt="Допомога постраждалим").fifth__wrapper-wrap-info-img
        .fifth__wrapper-wrap(:class="{'active' : ! modal}" )
            form(action="telegramRuCan.php" method="POST").fifth__wrapper-wrap-form
                input(type="text" placeholder="Ваше имя *" name="user_name" required).fifth__wrapper-wrap-form-name
                .fifth__wrapper-wrap-form-menu
                    a.fifth__wrapper-wrap-form-menu-contry
                        img(src="~/assets/img/Ua.svg" alt="Номер країни").fifth__wrapper-wrap-form-menu-contry-img
                        //- img(src="~/assets/img/arrNumb.svg" alt="").fifth__wrapper-wrap-form-menu-contry-arrow
                    input(type="tel" placeholder="+380 (99) 999-99-99 *"  minlength="10" maxlength="20" name="user_phone" required).fifth__wrapper-wrap-form-menu-phone
                input(type="text" placeholder="Ваш Email" name="user_email").fifth__wrapper-wrap-form-email
                input(type="text" placeholder="Ваш город *" name="user_locate" required).fifth__wrapper-wrap-form-city
                input(type="text" placeholder="Чем вы можете помочь?" name="user_can").fifth__wrapper-wrap-form-help
                .fifth__wrapper-wrap-form-submit 
                    input(type="submit" value="Отправить").fifth__wrapper-wrap-form-submit-btn
                    p.fifth__wrapper-wrap-form-submit-confid Нажимая кнопку «отправить» я согласен на обработку персональных данных
            .fifth__wrapper-wrap-info
                p.fifth__wrapper-wrap-info-text Стань частью нашей команды, сделай свой вклад в победу Украины. Передай одежду, еду, лекарства, помоги с эвакуацией или предложи другую помощь сам. 
                p.fifth__wrapper-wrap-info-text Спаси чью-то жизнь, ведь только, помогая друг другу, мы победим врага!
                img(src="~/assets/img/photo5.png" alt="Допомога постраждалим").fifth__wrapper-wrap-info-img
            
</template>

<script>
export default {
    data() {
            return {
                modal: false
                
            }
        },

        mounted() {
            console.log("Header");            
        },

        methods: {
            clickOnButton() {
               this.modal = ! this.modal
            }
        },
    
}
</script>

<style lang="scss" scoped>

* {
    font-family: "Greenwich";
    max-width: 100vw;
}
.fifth {
    padding: 150px 0;
    background: #000;
    border-radius: 20px;
    display: flex;
    justify-content: center;

    &__wrapper {

        &-title {
            color: #fff;
            font-family: "Greenwich";
            font-size: 55px;
            font-weight: 400;
            line-height: 1.2;
            max-width: 1312px;
            margin-bottom: 50px;
        }
        &-list {
            display: flex;
            &-item {
                width: 656px;
                &-btn {
                    width: 656px;
                    height: 65px;
                    background: #000;
                    cursor: pointer;
                    border: none;
                    border-bottom: 2px solid #818181;
                    color: #fff;
                    font-size: 20px;
                    font-weight: 400;
                    margin-bottom: 80px;

                    &.active {
                        width: 656px;
                        height: 65px;
                        border-bottom: 2px solid #F9224B;
                    }
                    &:hover {
                        color: #F9224B;
                        background:  radial-gradient(91.37% 141.18% at 14.31% 20.77%, rgba(140, 140, 140, 0.2) 0%, rgba(177, 185, 190, 0.0447917) 77.08%, rgba(134, 167, 198, 0) 100%);
                    }
                }
            }
        }
        &-wrap {
            display: none;
            &.active {
                display: flex;
            }
            &-form {
                display: flex;
                flex-direction: column;
                margin-right: 144px;
                &-name {
                    width: 528px;
                    height: 52px;
                    border: none;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                    background: none;
                    margin-bottom: 30px;
                    color: #fff;
                    padding-left: 15px;
                    font-size: 16px;
                    
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                    }
                }
                &-menu {
                    display: flex;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                    height: 52px;
                    width: 528px;
                    position: relative;
                    &-contry {
                        display: flex;
                        align-items: center;
                        cursor: pointer;
                        &-img {
                            margin-right: 2px;
                            height: 18px;
                            position: absolute;
                            left: 15px;
                        }
                        &-arrow {
                            width: 40%;
                            height: 7px;
                        }
                    }
                    
                    &-phone {
                    width: 528px;
                    height: 52px;
                    border: none;
                    background: none;
                    margin-bottom: 30px;
                    color: #fff;
                    padding-left: 55px;
                    font-size: 16px;
                    
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                        margin-left: 50px;

                    }
                }
                }
                &-email {
                    width: 528px;
                    height: 52px;
                    border: none;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                    background: none;
                    margin-top: 30px;
                    color: #fff;
                    padding-left: 15px;
                    font-size: 16px;
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                        
                    }
                }
                
                &-city {
                    width: 528px;
                    height: 52px;
                    border: none;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                    background: none;
                    margin: 30px 0;
                    color: #fff;
                    padding-left: 15px;
                    font-size: 16px;
                    
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                        
                    }
                }
                &-help {
                    width: 528px;
                    height: 52px;
                    border: none;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                    background: none;
                    color: #fff;
                    padding-left: 15px;
                    font-size: 16px;
                    
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                    }
                }
                &-submit {
                    display: flex;
                    margin-top: 50px;
                    width: 528px;
                    align-items: center;
                    &-btn {
                        margin-right: 32px;
                        width: 307px;
                        height: 58px;
                        background: #F9224B;
                        border: 1px solid #000;
                        border-radius: 10px;
                        color: #fff;
                        font-size: 16px;
                        font-weight: 400;
                    }
                    &-confid {
                        color: #fff;
                        font-size: 14px;

                    }
                }
            }
            &-info {
                width: 640px;
                &-text {
                    color: #fff;
                    margin-bottom: 40px;
                    &:first-child {
                        margin-bottom: 15px;
                    }
                }
                
            }
        }
    }
}
@media screen and (min-width: 768px) and (max-width: 1439px){
.fifth {
    padding: 70px 0;
    &__wrapper {
        position: relative;
        &-title {
            max-width: 680px;
            font-size: 32px;
        }
        &-list {
            max-height: 65px;
            &-item {
                max-width: 340px;
                &-btn {
                    max-width: 340px;
                    font-size: 16px;
                }
            }
        }
        &-wrap {
            &.active {
                display: block;
            }
            &-form {
                margin-top: 135px;
                &-submit {
                    &-confid {
                        font-size: 12px;
                    }
                }
            }
            &-info {
                &-text {
                    position: absolute;
                    top: 264px;
                    &:first-child {
                        top: 210px;
                    }
                }
                &-img {
                    margin-top: 40px;
                }
                
            }
        }
    }
}
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .fifth {
    padding: 50px 0;
    &__wrapper {
        position: relative;
        &-title {
            font-size: 24px;
            max-width: 328px;
            margin: auto;
            margin-bottom: 24px;
        }
        &-list {
            max-width: 328px;
            margin: auto;
            &-item {
                max-width: 164px;
                &-btn {
                    max-width: 164px;
                    font-size: 14px;
                }
            }
        }
        &-wrap {
            max-width: 328px;
            &.active {
                display: block;
                max-width: 328px;
            }
            &-form {
                margin-right: 0;
                margin-top: 165px;
                &-name {
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 20px;
                }
                &-menu {
                    max-width: 328px;
                    margin-bottom: 20px;
                    &-contry {
                        max-width: 328px;
                        margin: auto;
                        margin-bottom: 20px;

                        &-img {
                            right: 135px;
                            top: 17px;
                        }
                    }
                    
                    &-phone {
                        max-width: 328px;
                        margin: auto;
                        padding-left: 55px;
                    }
                }
                &-email {
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 20px;
                }
                
                &-city {
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 20px;
                }
                &-help {
                    
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 40px;
                }
                &-submit {
                    display: block;
                    max-width: 328px;
                    margin: auto;
                    &-btn {
                        width: 328px;
                        margin-bottom: 16px;
                        margin-right: 0;
                    }
                    &-confid {
                        width: 328px;
                        margin-bottom: 40px;
                    }
                }
            }
            &-info {
                max-width: 328px;
                margin: auto;
                &-text {
                    position: absolute;
                    width: 328px;
                    top: 365px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    &:first-child {
                        top: 260px;
                        left: 50%;
                    }
                }
                &-img {
                    max-width: 328px;
                    margin: auto;
                }
                
            }
        }
    }
}
}
</style>