<template lang="pug">
section.fourth
    .fourth__wrapper
        .fourth__wrapper-wrap 
            .fourth__wrapper-wrap-head 
                h2.fourth__wrapper-wrap-head-title Процес нашої роботи дуже простий
                p.fourth__wrapper-wrap-head-text Допомагаємо всім, хто цього потребує
            .fourth__wrapper-wrap-description
                p.fourth__wrapper-wrap-description-text Відповідально ставимося до кожного етапу. Для нас важлива чесність та прозорість. Ми віримо, що добро завжди перемагає зло! 
                a(href="#forms").fourth__wrapper-wrap-description-link Отримати допомогу
        .fourth__wrapper-help 
            ul.fourth__wrapper-help-list 
                li.fourth__wrapper-help-list-item
                    span.fourth__wrapper-help-list-item-numb 01
                    p.fourth__wrapper-help-list-item-text Поширення інформації про збір  коштів та власне збір коштів.  Тому були б вдячні вашим  репостам!
                li.fourth__wrapper-help-list-item
                    span.fourth__wrapper-help-list-item-numb 02
                    p.fourth__wrapper-help-list-item-text Закупка необхідної амуніції та  гуманітарної допомоги для  наших захисників та лікарень.
                li.fourth__wrapper-help-list-item(id="report")
                    span.fourth__wrapper-help-list-item-numb 03
                    p.fourth__wrapper-help-list-item-text Все необхідне ми власноруч доставляємо та передаємо прямо в руки. Звітуємо про це на нашому <a class="fourth__wrapper-help-list-item-text-link" href="#rep">сайті</a> та в соц мережах.
        .fourth__wrapper-report
            .fourth__wrapper-report-info 
                h2.fourth__wrapper-report-info-title Звітність про виконану роботу
                .fourth__wrapper-report-info-paragraph 
                    .fourth__wrapper-report-info-paragraph-wrap
                        p.fourth__wrapper-report-info-paragraph-wrap-text Ми активно ведемо наші акаунти в соціальних мережах Instagram та Facebook, де транслюємо нашу діяльність. Чому це важливо? 
                        p.fourth__wrapper-report-info-paragraph-wrap-text Це допомагає нам освітлювати нашу роботу в сторі та постах. Ми регулярно звітуємо про зібрану суму та показуємо, що потрібно зараз допомагати одне одному в такий тяжкий для нашої країни час. 
                        p.fourth__wrapper-report-info-paragraph-wrap-text Будемо безмежно вдячні вашій підтримці, репостам та поширенню інформації про збір коштів.
                    .fourth__wrapper-report-info-paragraph-box
                        p.fourth__wrapper-report-info-paragraph-box-text Результати нашої праці та вашого внеску в оборону нашої держави ви можете бачити щодня на наших світлинах.
                        p.fourth__wrapper-report-info-paragraph-box-follow Слідкуй за нами в соцмережах:
                        .fourth__wrapper-report-info-paragraph-box-links
                            a(href="https://instagram.com/sveta.k_s?igshid=YmMyMTA2M2Y=").fourth__wrapper-report-info-paragraph-box-links-link Instagram
                                img(src="~/assets/img/arrLink.svg" alt="Соціальна мережа").fourth__wrapper-report-info-paragraph-box-links-link-img
                            a(href="https://t.me/pomozchazov").fourth__wrapper-report-info-paragraph-box-links-link Telegram
                                img(src="~/assets/img/arrLink.svg" alt="Соціальна мережа").fourth__wrapper-report-info-paragraph-box-links-link-img
            .fourth__wrapper-report-picture 
                img(src="~/assets/img/iphone.png" alt="IPhone").fourth__wrapper-report-picture-img
            

</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
* {
    font-family: "Greenwich";
    color: #000;
    max-width: 100vw;
}


.fourth {
    padding: 150px 0 0;
    display: flex;
    justify-content: center;
    &__wrapper {

        &-wrap {
            display: flex;
            margin-bottom: 82px;
            &-head {
                margin-right: 290px;
                width: 610px;

                &-title {
                    font-size: 55px;
                    font-weight: 400;
                    margin-bottom: 30px;
                    line-height: 1.25;
                }

                &-text {
                    color: rgba(0, 0, 0, 0.6);
                    font-family: 'Greenwich-SemBd';
                    font-size: 20px;
                }
            }

            &-description {
                width: 415px;
                &-text {
                    font-size: 20px;
                    margin-top: 34px;
                    font-family: 'Greenwich-SemBd';
                    margin-bottom: 14px;
                }

                &-link {
                    font-family: 'Greenwich-SemBd';
                    color: #F9224B;
                    font-size: 20px;
                    &:hover {
                        text-decoration: none;
                    }
                }
            }
        }

        &-help {


            &-list {
                display: flex;
                &-item {
                    width: 416px;
                    height: 205px;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
                    &:not(:last-child) {
                        margin-right: 32px;
                    }
                     &:first-child {
                        grid-area: first;
                    }
                    &:nth-child(2) {
                        grid-area: second;
                    }
                    &:nth-child(3) {
                        grid-area: third;
                    }
                    &-numb {
                        color: #F9224B;
                        font-family: "Greenwich-SemBd";
                        font-weight: 500;
                        font-size: 20px;
                    }
                    &-text {
                        font-size: 20px;
                        font-family: "Greenwich-SemBd";
                        margin-top: 24px;
                        line-height: 1.3;
                        max-width: 336px;
                        &-link {
                            color: #F9224B;
                            &.hover {
                                text-decoration: none;
                            }
                        }

                    }
                }
            }
        }
        &-report {
            display: flex;
            &-info {

                &-title {
                    font-size: 55px;
                    margin: 150px 0 40px;
                }
                &-paragraph {
                    height: 212px;
                    display: flex;
                    &-wrap {
                        margin-right: 34px;
                        &-text {
                        width: 414px;
                        margin-bottom: 24px;
                        line-height: 1.3;
                        }
                    }
                    &-box {

                        &-text {
                        width: 414px;
                        line-height: 1.3;
                        }
                        &-follow {
                            font-size: 20px;
                            font-family: "Greenwich-Med";
                            margin: 40px 0 16px;
                        }
                        &-links {
                            display: flex;
                            &-link {
                                display: flex;
                                font-family: "Greenwich-Med";
                                font-size: 20px;
                                color: #F9224B;
                                &:hover {
                                    text-decoration: none;
                                }

                                &:not(:last-child) {
                                    margin-right: 57px;
                                }
                                
                            }
                        }
                    }
                }
            }
            &-picture {
                
                &-img {
                    margin-top: 200px;
                }
            }
        }
    }
}
@media screen and (min-width: 768px) and (max-width: 1439px){
.fourth {
    padding: 100px 0 200px;
    &__wrapper {

        &-wrap {
            max-width: 680px;
            margin: auto;
            margin-bottom: 50px;
            &-head {
                max-width: 331px;
                margin-right: 0;
                &-title {
                    font-size: 32px;
                }

                &-text {
                    font-size: 16px;
                    max-width: 224px;
                }
            }

            &-description {
                    max-width: 328px;
                &-text {
                    font-size: 16px;
                }

                &-link {
                    font-size: 16px;
                }
            }
        }

        &-help {


            &-list {
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                grid-template-rows: 1fr 1fr; 
                gap: 0px 0px; 
                grid-template-areas: 
                    "first second"
                    "third ."; 
                max-width: 683px;
                max-height: 336px;
                margin: auto;
                &-item {
                    max-width: 264px;
                    max-height: 155px;
                    &:not(:last-child) {
                        margin-right: 0;
                        margin-bottom: 55px;
                    }
                    &-numb {
                        font-size: 16px;
                    }
                    &-text {
                        font-size: 16px;
                        margin-top: 16px;
                        max-width: 262px;
                    }
                   
                }
            }
        }
        &-report {
            height: 490px;
            
            &-info {
                max-width: 328px;

                &-title {
                    font-size: 32px;
                    margin: 100px 0 32px;
                }
                &-paragraph {
                    display: block;
                    &-wrap {
                        &-text {
                            font-size: 14px;
                            max-width: 328px;
                            margin-bottom: 16px;
                        }
                    }
                    &-box {

                        &-text {
                            font-size: 14px;
                            max-width: 328px;
                        }
                        &-follow {
                            font-size: 16px;
                            margin: 16px 0 10px;
                        }
                        &-links {
                            &-link {
                                font-size: 16px;
                                
                            }
                        }
                    }
                }
            }
            &-picture {
                position: relative;
                
                &-img {
                    max-width: 330px;
                    position: absolute;
                    left: 11px;
                    top: 133px;
                }
            }
        }
    }
}
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .fourth {
        padding: 50px 0 0;
    &__wrapper {
        position: relative;
        &-wrap {
            display: block;
            margin-bottom: 40px;
            &-head {
                margin-right: 0;
                &-title {
                    font-size: 24px;
                    max-width: 325px;
                    margin: auto;
                }

                &-text {
                    font-size: 14px;
                    max-width: 328px;
                    margin: auto;
                    margin-top: 8px;
                }
            }

            &-description {
                max-width: 328px;
                margin: auto;
                &-text {
                    font-size: 14px;
                    max-width: 328px;
                }

                &-link {
                    font-size: 14px;
                }
            }
        }

        &-help {


            &-list {
                 display: grid; 
                grid-template-columns: 1fr; 
                grid-template-rows: 1fr 1fr 1fr; 
                gap: 40px 0px; 
                grid-template-areas: 
                    "first"
                    "second"
                    "third"; 
                    
                    max-width: 328px;
                    margin: auto;
                &-item {
                    max-height: 95px;
                    max-width: 328px;
                    margin-right: 0;
                    border: none;
                    &:nth-child(2) {
                        margin-bottom: -20px;
                    }
                    &-numb {
                        font-size: 14px;
                        &:nth-child(2) {
                            margin-top: 10px;
                        }
                    }
                    &-text {
                        font-size: 14px;
                        margin-top: 8px;
                        max-width: 328px;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
                        padding-bottom: 16px;
                    }
                }
            }
        }
        &-report {
            display: block;
            &-info {
                max-height: 570px;

                &-title {
                    font-size: 24px;
                    max-width: 274px;
                    margin: auto;
                    margin-top: 50px;
                    margin-bottom: 24px;
                }
                &-paragraph {
                    display: block;
                    &-wrap {
                        max-width: 328px;
                        margin: auto;
                        &-text {
                            max-width: 328px;
                        }
                    }
                    &-box {
                        max-width: 328px;
                        margin: auto;
                        &-text {
                            font-size: 14px;
                            max-width: 328px;
                            margin: auto;
                        }
                        &-follow {
                            font-size: 16px;
                        }
                        &-links {
                            &-link {
                                font-size: 16px;
                                align-items: center;
                                &-img {
                                    width: 19px;
                                    height: 19px;
                                }
                            }
                        }
                    }
                }
            }
            &-picture {
                max-width: 300px;
                margin: auto;
                
                &-img {
                    max-width: 260px;
                    max-height: 370px;
                    object-fit: cover;
                    object-position: top;
                    margin-top: 320px;
                    margin-bottom: -1px;
                }
            }
        }
    }
}
}
</style>