<template lang="pug">
section.sixth(id="faq")
    .sixth__wrapper
        .sixth__wrapper-faq
            .sixth__wrapper-faq-head
                h2.sixth__wrapper-faq-head-title FAQ
                p.sixth__wrapper-faq-head-text Ми зібрали для вас відповіді на найпоширеніші запитання
            ul.sixth__wrapper-faq-list
                li.sixth__wrapper-faq-list-item( :class="{'active' : modal1}")
                    .sixth__wrapper-faq-list-item-wrap
                        h4.sixth__wrapper-faq-list-item-wrap-question Чому я можу вам довіряти?
                        p.sixth__wrapper-faq-list-item-wrap-text(:class="{'active' : modal1}") Всі ми - реальні люди. Всі ми знаходимося на території України. Ми - звичайні студенти, які вирішили бути корисними своїй країні. Щоб спростувати будь-які сумніви, ми проводимо звітність і робимо нашу справу абсолютно прозоро.
                    .sixth__wrapper-faq-list-item-btn(type="button" @click="clickOnButton1" :class="{'active' : modal1}")
                li.sixth__wrapper-faq-list-item(:class="{'active' : modal2}")
                    .sixth__wrapper-faq-list-item-wrap
                        h4.sixth__wrapper-faq-list-item-wrap-question Як я можу допомогти?
                        p.sixth__wrapper-faq-list-item-wrap-text(:class="{'active' : modal2}") •Фінансово - пожертвувати кошти. <br><br> •Матеріально - продукти харчування, речі, медикаменти, пальне, транспорт. Для цього потрібно  заповнити коротку. <a class="sixth__wrapper-faq-list-item-wrap-text-link" href="#forms">форму</a> та надати контакт для зв‘язку і співпраці з вами. <br><br>•Фізично - долучитися до нашої команди.<br><br>•Словесно - підтримувати нас розповсюдженням інформації репостом на своїй сторінці або за допомогою посилання на сайт.
                    .sixth__wrapper-faq-list-item-btn(type="button" @click="clickOnButton2" :class="{'active' : modal2}")
                li.sixth__wrapper-faq-list-item(:class="{'active' : modal3}")
                    .sixth__wrapper-faq-list-item-wrap
                        h4.sixth__wrapper-faq-list-item-wrap-question Чому ми нічого не заробляємо на цьому?
                        p.sixth__wrapper-faq-list-item-wrap-text(:class="{'active' : modal3}")  Ми - волонтери. Нам не дозволяє совість класти щось до свого карману, поки люди страждають від гуманітароної катастрофи та агресії з боку РФ. Навіть, те що ми вже зробили і робимо зараз ми вважаємо замалим внеском. Тому робимо все щоб допомогти кожному! І були б раді вітати в своїй команді однодумців)
                    .sixth__wrapper-faq-list-item-btn(type="button" @click="clickOnButton3" :class="{'active' : modal3}")
                li.sixth__wrapper-faq-list-item(:class="{'active' : modal4}")
                    .sixth__wrapper-faq-list-item-wrap
                        h4.sixth__wrapper-faq-list-item-wrap-question Чи будете ви продовжувати свою діяльність після війни?
                        p.sixth__wrapper-faq-list-item-wrap-text(:class="{'active' : modal4}") Якщо буде потреба в зборі коштів для відбудування нашої країни та рідних домівок, що залишилися розбитими від російських ракет, ми обов‘язково допоможемо. Наразі не можемо дати стовідсоткової відповіді на це питання, але обов‘язково зробимо все можливе!
                    .sixth__wrapper-faq-list-item-btn(type="button" @click="clickOnButton4" :class="{'active' : modal4}")
        .sixth__wrapper-soul(id="contacts")
            .sixth__wrapper-soul-head 
                h2.sixth__wrapper-soul-head-title Команда, яка вкладає  всю душу в свою  справу
                .sixth__wrapper-soul-head-info 
                    p.sixth__wrapper-soul-head-info-text Кожен з нас допомагає чим може: збір коштів, розвезення гуманітарної допомоги, надання ліків та їжі...
                    a(href="#forms").sixth__wrapper-soul-head-info-link Долучитись до команди
            .sixth__wrapper-soul-slider 
                ul.sixth__wrapper-soul-slider-list
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider1.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Світлана Карацюба
                        p.sixth__wrapper-soul-slider-list-item-text Збір коштів, допомагає в Києві
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider2.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Підковка Таня
                        p.sixth__wrapper-soul-slider-list-item-text Розповсюдження інформації
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider3.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Вофсі Павло
                        p.sixth__wrapper-soul-slider-list-item-text Передача гуманітарної допомоги, допомагає в Києві
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider4.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Ніно Басілая
                        p.sixth__wrapper-soul-slider-list-item-text Розповсюдження інформації
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider5.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Шляхта Віка
                        p.sixth__wrapper-soul-slider-list-item-text Розповсюдження інформації
                    li.sixth__wrapper-soul-slider-list-item
                        img(src="~/assets/img/slider6.png", alt="Волонтер").sixth__wrapper-soul-slider-list-item-img
                        p.sixth__wrapper-soul-slider-list-item-name Богдан
                        p.sixth__wrapper-soul-slider-list-item-text Передача гуманітарної допомоги, допомагає в Ніжині
            .sixth__wrapper-soul-contacts 
                ul.sixth__wrapper-soul-contacts-list 
                    li.sixth__wrapper-soul-contacts-list-item 
                        span.sixth__wrapper-soul-contacts-list-item-numb 01 
                        .sixth__wrapper-soul-contacts-list-item-wrap
                            p.sixth__wrapper-soul-contacts-list-item-wrap-name Світлана Карацюба
                            a(href="mailto:Karazubasveta@gmail.com").sixth__wrapper-soul-contacts-list-item-wrap-phone Karazubasveta@gmail.com
                        .sixth__wrapper-soul-contacts-list-item-socials
                            a(href="https://instagram.com/sveta.k_s?igshid=YmMyMTA2M2Y=").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/inst.svg", alt="Інстаграм").sixth__wrapper-soul-contacts-list-item-socials-link-img
                            a(href="https://t.me/Svetakaratsiuba").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/tg.svg", alt="Телеграм").sixth__wrapper-soul-contacts-list-item-socials-img
                    li.sixth__wrapper-soul-contacts-list-item 
                        span.sixth__wrapper-soul-contacts-list-item-numb 02
                        .sixth__wrapper-soul-contacts-list-item-wrap
                            p.sixth__wrapper-soul-contacts-list-item-wrap-name Підковка Таня
                            a(href="mailto:Podkovkatana@gmail.com").sixth__wrapper-soul-contacts-list-item-wrap-phone Podkovkatana@gmail.com
                        .sixth__wrapper-soul-contacts-list-item-socials
                            a(href="https://instagram.com/tana.podkovka?igshid=YmMyMTA2M2Y= ").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/inst.svg", alt="Інстаграм").sixth__wrapper-soul-contacts-list-item-socials-link-img
                            a(href="https://t.me/tanapodkovka").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/tg.svg", alt="Телеграм").sixth__wrapper-soul-contacts-list-item-socials-img
                    li.sixth__wrapper-soul-contacts-list-item 
                        span.sixth__wrapper-soul-contacts-list-item-numb 03
                        .sixth__wrapper-soul-contacts-list-item-wrap
                            p.sixth__wrapper-soul-contacts-list-item-wrap-name Вофсі Павло
                            a(href="mailto:pashavozianidze@gmail.com").sixth__wrapper-soul-contacts-list-item-wrap-phone pashavozianidze@gmail.com
                        .sixth__wrapper-soul-contacts-list-item-socials
                            a(href="https://instagram.com/vofsikpash?igshid=YmMyMTA2M2Y=").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/inst.svg", alt="Інстаграм").sixth__wrapper-soul-contacts-list-item-socials-link-img
                            a(href="https://t.me/Vozianidze").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/tg.svg", alt="Телеграм").sixth__wrapper-soul-contacts-list-item-socials-img
                    li.sixth__wrapper-soul-contacts-list-item 
                        span.sixth__wrapper-soul-contacts-list-item-numb 04
                        .sixth__wrapper-soul-contacts-list-item-wrap
                            p.sixth__wrapper-soul-contacts-list-item-wrap-name Шляхта Віка
                            a(href="mailto:vikashliakhta865@gmail.com").sixth__wrapper-soul-contacts-list-item-wrap-phone vikashliakhta865@gmail.com
                        .sixth__wrapper-soul-contacts-list-item-socials
                            a(href=" https://instagram.com/vikashliakhta?igshid=YmMyMTA2M2Y=").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/inst.svg", alt="Інстаграм").sixth__wrapper-soul-contacts-list-item-socials-link-img-solo
                            //- a(href="https://t.me/").sixth__wrapper-soul-contacts-list-item-socials-link
                            //-     img(src="~/assets/img/tg.svg", alt="Телеграм").sixth__wrapper-soul-contacts-list-item-socials-img
                    li.sixth__wrapper-soul-contacts-list-item 
                        span.sixth__wrapper-soul-contacts-list-item-numb 05
                        .sixth__wrapper-soul-contacts-list-item-wrap
                            p.sixth__wrapper-soul-contacts-list-item-wrap-name Богдан
                            a(href="dan4ik.crash@gmail.com").sixth__wrapper-soul-contacts-list-item-wrap-phone dan4ik.crash@gmail.com
                        .sixth__wrapper-soul-contacts-list-item-socials
                            a(href="https://t.me/Darkness_Flame").sixth__wrapper-soul-contacts-list-item-socials-link
                                img(src="~/assets/img/tg.svg", alt="Телеграм").sixth__wrapper-soul-contacts-list-item-socials-link-img-solo
                                

        



</template>

<script>
export default {
    data() {
            return {
                modal1: false,
                modal2: false,
                modal3: false,
                modal4: false
                
            }
        },

        mounted() {
            console.log("Header");            
        },

        methods: {
            clickOnButton1() { 
                this.modal1 = ! this.modal1
            },
            clickOnButton2() {
               this.modal2 = ! this.modal2
            },
            clickOnButton3() {
              this.modal3 = ! this.modal3
            },
            clickOnButton4() {
              this.modal4 = ! this.modal4
            },
        },
}
</script>

<style lang="scss" scoped>
    * {
        font-family: "Greenwich";
    }
    .sixth {
        padding: 150px 0 80px;
        display: flex;
        justify-content: center;
        // flex-direction: column;
        align-items: center;

        &__wrapper {

            &-faq {
                display: flex;
                &-head {
                    margin-right: 144px;
                    &-title {
                        font-size: 55px;
                        margin-bottom: 21px;
                    }
                    &-text {
                        color: #3F3F3F;
                        width: 304px;
                    }
                }
                &-list {
                    width: 864px;
                    &-item {
                        display: flex;
                        background: #f8f8f8;
                        border-radius: 20px;
                        margin-bottom: 32px;
                        position: relative;
                        &.active {
                            // border: 1px solid #000;
                            border-radius: 20px;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            
                        }

                        &-wrap {
                            
                            
                            &-question {
                                font-size: 20px;
                                padding: 24px 0 24px 32px;
                            }
                            &-text {
                                display: none;

                                &.active {
                                    display: block;
                                    color: #3F3F3F;
                                    max-width: 740px;
                                    padding: 0 0 24px 32px;
                                    margin-top: -8px;
                                }
                            }
                        }
                        &-btn {
                            position: absolute;
                            top: 12px;
                            right: 32px;
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
                                content: '';
                                position: absolute;
                                top: 24px;
                                left: 10px;
                                display: block;
                                width: 30px;
                                height: 2px;
                                background: #fff;
                                
                            }
                            &::before {
                                transform: rotate(0deg);
                                transition: rotare ease 0.5s;
                            }
                            &::after {
                                transform: rotate(-90deg);
                            }
                            &:hover:after,
                            &:hover:before {
                                background: #F9224B;
                                left: -1;
                            }

                            &.active {
                                
                                &::before {
                                    transform: rotate(45deg);
                                }
                                &::after {
                                    transform: rotate(-45deg);
                                }
                            }

                        }
                    }
                }
            }
            &-soul {
                padding-top: 150px;
                &-head {
                    display: flex;
                    align-items: baseline;
                    &-title {
                        font-size: 55px;
                        font-weight: 400;
                        margin-right: 256px;
                        line-height: 1.2;
                        max-width: 640px;
                    }
                    &-info {

                        &-text {
                            font-size: 20px;
                            font-family: "Greenwich";
                            font-weight: 600;
                            margin-bottom: 40px;
                            width: 389px;
                        }
                        &-link {
                            color: #F9224B;
                            font-size: 20px;
                            font-family: 'Greenwich-SemBd';
                            &:hover {
                                text-decoration: none;
                            }
                        }
                    }
                }
                &-slider {
                    margin: 80px 0;
                    max-width: 1312px;
                    &-list {
                        display: flex;
                        overflow-x: scroll;
                        &-item {
                            margin-right: 32px;
                            &-img {
                                margin-bottom: 32px;
                            }
                            &-name {
                                font-family: "Greenwich-Med";
                                font-weight: 600;
                                font-size: 20px;
                            }
                            &-text {
                                margin: 16px 0;
                            }
                        }
                    }
                }
                &-contacts {

                    &-list {

                        &-item {
                            display: flex;
                            align-items: center;
                            border-bottom: 1px solid #000;
                            padding: 47px 0;
                            width: 1312px;
                            &:first-child {
                                border-top: 1px solid #000;
                            }
                            &-numb {
                                font-size: 20px;
                                color: #F9224B;
                                margin-right: 425px;
                                width: 21px;
                            }
                            &-wrap {
                                display: flex;
                                &-name {
                                font-family: "Greenwich-Med";
                                font-weight: 600;
                                font-size: 20px;
                                width: 200px;
                                margin-right: 250px;
                                }
                            &-phone {
                                font-size: 20px;
                                width: 210px;
                                text-decoration: none;
                                color: #000;
                                margin-right: 135px;
                                &:hover {
                                    color: #F9224B;
                                }
                                
                            }
                        }
                            
                            &-socials {
                                display: flex;
                                &-link {

                                    &:not(:last-child) {
                                            margin-right: 10px;
                                        }
                                    &-img {

                                        &-solo {
                                            margin-left: 40px;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
@media screen and (min-width: 768px) and (max-width: 1439px){
.sixth {
    padding: 100px 0 40px;
        &__wrapper {
            max-width: 680px;

            &-faq {
                display: block;
                &-head {
                    &-title {
                        font-size: 32px;
                    }
                    &-text {
                        font-size: 16px;
                    }
                }
                &-list {
                    margin-top: 40px;
                    max-width: 680px;
                    &-item {
                        max-width: 680px;

                        &-wrap {
                            
                            
                            &-question {
                                font-size: 16px;
                                padding: 24px 0 24px 24px;
                            }
                            &-text {
                                font-size: 14px;
                                &.active {
                                    max-width: 586px;
                                    padding: 0 0 24px 24px;
                                }
                            }
                        }
                    }
                }
            }
            &-soul {
                &-head {
                    &-title {
                        font-size: 32px;
                        margin-right: 112px;
                    }
                    &-info {
                        max-width: 328px;
                        &-text {
                            font-size: 16px;
                            max-width: 328px;
                            margin-bottom: 16px;
                        }
                        &-link {
                            font-size: 16px;
                        }
                    }
                }
                &-slider {
                    margin: 32px 0 50px;
                    &-list {
                        &-item {
                            max-width: 240px;
                            &-img {
                                max-width: 240px;
                                margin-bottom: 16px;
                            }
                            &-name {
                                font-size: 16px;
                            }
                            &-text {
                                font-size: 14px;
                                margin: 8px 0;
                            }
                        }
                    }
                }
                &-contacts {

                    &-list {

                        &-item {
                            max-width: 680px;
                            &-numb {
                                font-size: 14px;
                                margin-right: 150px;
                            }
                            &-wrap {
                                &-name {
                                font-size: 16px;
                                margin-right: 25px;
                                max-width: 154px;
                                }
                            &-phone {
                                font-size: 16px;
                                margin-right: 97px;
                                max-width: 165px;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .sixth {
    padding: 50px 0 40px;
        &__wrapper {
            max-width: 328px;

            &-faq {
                display: block;
                &-head {
                    &-title {
                        font-size: 32px;
                    }
                    &-text {
                        font-size: 14px;
                    }
                }
                &-list {
                    margin-top: 40px;
                    max-width: 328px;
                    &-item {
                        max-width: 328px;

                        &-wrap {
                            
                            
                            &-question {
                                max-width: 224px;
                                font-size: 14px;
                                padding: 24px 0 24px 24px;
                            }
                            &-text {
                                font-size: 14px;
                                &.active {
                                    max-width: 248px;
                                    padding: 0 0 24px 24px;
                                }
                            }
                        }
                    }
                }
            }
            &-soul {
                padding-top: 50px;
                &-head {
                    display: block;
                    &-title {   
                        font-size: 24px;
                        margin-right: 112px;
                        max-width: 240px;
                        width: 240px;
                        margin-bottom: 16px;
                    }
                    &-info {
                        max-width: 328px;
                        &-text {
                            font-size: 14px;
                            max-width: 328px;
                            margin-bottom: 8px;
                        }
                        &-link {
                            font-size: 14px;
                        }
                    }
                }
                &-slider {
                    margin: 32px 0;
                    &-list {
                        &-item {
                            max-width: 240px;
                            &-img {
                                max-width: 240px;
                                margin-bottom: 16px;
                            }
                            &-name {
                                font-size: 14px;
                            }
                            &-text {
                                font-size: 12px;
                                margin: 8px 0;
                            }
                        }
                    }
                }
                &-contacts {

                    &-list {

                        &-item {
                            max-width: 328px;
                            padding: 20px 0;
                            &-numb {
                                display: block;
                                font-size: 14px;
                                margin-right: 150px;
                                margin-right: 27px;
                            }
                            &-wrap {
                                display: block;
                                max-width: 175px;
                                width: 170px;
                                margin-right: 40px;
                                &-name {
                                font-size: 14px;
                                margin-right: 25px;
                                max-width: 143px;
                                margin-right: 0;
                            }
                            &-phone {
                                margin-right: 0;
                                font-size: 14px;
                                max-width: 143px;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
</style>