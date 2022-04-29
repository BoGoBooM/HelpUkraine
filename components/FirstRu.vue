<template lang="pug">
section.charity
    .charity__wrapper
        .charity__wrapper-info(id="numbers") 
            p.charity__wrapper-info-text Благотворительный фонд 
            .charity__wrapper-info-text-indent 
            p.charity__wrapper-info-text Гуманитарная помощь 
        h1.charity__wrapper-title На нужды Вооруженных Сил Украины и пострадавших в результате войны
        .charity__wrapper-content
            .charity__wrapper-content-wrapper
                a(href="#").charity__wrapper-content-wrapper-btn Пожертвовать
                p.charity__wrapper-content-wrapper-text Помоги украинской армии и всем нуждающимся.<br> Твоя помощь может стать решающей для жизни человека
            
        .charity__wrapper-donations
            ul.charity__wrapper-donations-list
                li.charity__wrapper-donations-list-item
                    .charity__wrapper-donations-list-item-wrap
                        span.charity__wrapper-donations-list-item-wrap-title > 250.000₴
                        p.charity__wrapper-donations-list-item-wrap-text Было собрано неравнодушными людьми
                li.charity__wrapper-donations-list-item
                    .charity__wrapper-donations-list-item-wrap
                        span.charity__wrapper-donations-list-item-wrap-title > 150 шт
                        p.charity__wrapper-donations-list-item-wrap-text Бронежелетов доставлено к нашим защитникам
                li.charity__wrapper-donations-list-item
                    .charity__wrapper-donations-list-item-wrap
                        span.charity__wrapper-donations-list-item-wrap-title 3597 человек
                        p.charity__wrapper-donations-list-item-wrap-text Присоединились к нашей деятельности и <br> внесли свой вклад в победу Украины
                li.charity__wrapper-donations-list-item.time
                    .charity__wrapper-donations-list-item-timer 
                        .charity__wrapper-donations-list-item-timer-time 48 дней 17 часов 
                        .charity__wrapper-donations-list-item-timer-text С начала войны в Украине против России


</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

* {
    background: #000;
    color: #fff;
    font-family: "Greenwich";
    max-width: 100vw;
}
.charity {
    width: 100vw;
    padding: 165px 0 64px 80px;
    border-radius: 0 0 20px 20px;
    display: flex;
    justify-content: center;

    &__wrapper {
        display: block;
       
        &-info {
            display: flex;
            align-items: center;
            margin-bottom: 9px;

            &-text {
                font-size: 20px;
                margin-right: 17px;

                &-indent {
                    content: " ";
                    background: #F9224B;
                    height: 8px;
                    width: 8px;
                    border-radius: 5px;
                    margin-right: 17px;
                }
            } 
        }

        &-title {
            font-size: 60px;
            max-width: 1200px;
            line-height: 1.1;
            margin-bottom: 32px;
        }

        &-content {
            display: flex;
            align-items: flex-start;

            &-wrapper {
                display: flex;
                align-items: center;

                &-btn {
                text-decoration: none;
                padding: 20px 49px;
                background: #F9224B;
                border-radius: 5px;
                margin-right: 32px;
                border: 1px solid #000;

                &:hover {
                    background: #000;
                    border: 1px solid #F9224B;
                }
            }

            &-text {
                max-width: 486px;
            }
            }
            

           
        }

        &-donations {
            justify-content: center;
            &-list {
                display: flex;
                display: grid; 
                grid-template-columns: 1fr 1fr 1fr; 
                grid-template-rows: 1fr 1fr; 
                gap: 24px 24px;  
                grid-template-areas: 
                    ". . first"
                    "second third fourth";

                &-item {
                    width: 416px;
                    height: 155px;
                    background: radial-gradient(91.37% 141.18% at 14.31% 20.77%, rgba(140, 140, 140, 0.2) 0%, rgba(177, 185, 190, 0.06) 77.08%, rgba(134, 167, 198, 0.01) 100%);
                    background-blend-mode: overlay, normal;
                    backdrop-filter: blur(80px);
                    border-radius: 15px;
                    &:first-child {
                        grid-area: second;
                    }
                    &:nth-child(2) {
                        grid-area: third;
                    }
                    &:nth-child(3) {
                        grid-area: fourth;
                    }
                    &:nth-child(4) {
                        grid-area: first;
                    }
                    &.time {
                        background: none;
                    }

                     &-timer {
                        background: none;
                        
                        &-time {
                            font-size: 46px;
                            font-family: "Greenwich-SemBd";
                            color: #F9224B;
                            background: none;
                        }
                        &-text {
                            background: none;
                        }
                    }

                    &-wrap {
                        background: none;
                        margin: 34px 0 0 32px;

                        &-title {
                            font-size: 32px;
                            background: none;
                            color: #F9224B;
                            font-weight: 700;
                            font-family: 'Greenwich-Med';
                        }

                        &-text {
                            background: none;
                        }
                    }
                }
            }
        }
    }
}
@media screen and (min-width: 768px) and (max-width: 1439px){
.charity {
    padding: 165px 0 70px;
    &__wrapper {

       
        &-info {
            max-width: 680px;
        }

        &-title {
            font-size: 40px;
            max-width: 680px;
            margin: auto;
            margin-bottom: 24px;
        }

        &-content {
            justify-content: center;
            margin-bottom: 32px;
        }

        &-donations {
            &-list {
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                grid-template-rows: 1fr 1fr; 
                gap: 24px 24px;  
                grid-template-areas: 
                        "second first"
                        "third fourth"; 
                margin-left: -86px;
                justify-content: stretch; 
                align-content: center; 
                justify-items: stretch; 
                align-items: stretch; 
                margin: 0;

                &-item {
                    max-width: 328px;
                    &:not(:last-child) {
                        margin-right: 0;
                    }

                    &.time {
                        background: #000;
                    }
                    

                    &-wrap {

                        &-title {
                            font-size: 24px;
                        }

                        &-text {
                            font-size: 14px;
                        }
                    }
                    &-timer {
                        margin-top: 30px;
                        &-time {
                            font-size: 24px;
                        }
                    }
                }
            }
        }
    }
}
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .charity {
        padding: 110px 0 50px;
        &__wrapper {

        
            &-info {
                max-width: 328px;
                margin: auto;
                margin-bottom: 8px;
                &-text {
                    font-size: 14px;
                    margin-right: 8px;
                    &-indent {
                        margin-right: 8px;
                    }
                } 
            }

            &-title {
                font-size: 28px;
                max-width: 328px;
                margin: auto;
            }

            &-content {
                justify-content: center;
                // margin-bottom: 32px;
                &-wrapper {
                    display: block;
                    max-width: 328px;
                    margin-top: 40px;
                    &-btn {
                        max-width: 152px;
                        margin-right: 0;
                        padding: 11px 35px;
                }

                &-text {
                    font-size: 14px;
                    margin-top: 25px;
                }
                }
                

                
            }

            &-donations {
                &-list {
                    display: grid; 
                    grid-template-columns: 1fr; 
                    grid-template-rows: 1fr 1fr 1fr 1fr; 
                    gap: 24px 0px; 
                    grid-template-areas: 
                        "first"
                        "second"
                        "third"
                        "fourth";  
                    margin: 0;

                    &-item {
                        max-width: 328px;
                        max-height: 107px;
                        &:not(:last-child) {
                            margin-right: 0;
                        }
                        

                        &.time {
                            background: #000;
                        }
                        

                        &-wrap {
                            margin: 16px 0 0 32px;
                            &-title {
                                font-size: 24px;
                            }

                            &-text {
                                font-size: 14px;
                            }
                        }
                        &-timer {
                            margin-top: 30px;
                            text-align: end;
                            &-time {
                                font-size: 24px;
                            }
                        }
                    }
                }
            }
        }
    }   
}

</style>