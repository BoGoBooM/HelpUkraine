<template lang="pug">
section.team(id="about") 
    .team__wrapper
        h2.team__wrapper-title Команда студентів, які згуртувались, щоб <br> допомогти своїй країні
        .team__wrapper-page 
            img(src="~/assets/img/photo1.png" alt="Гуманітарна допомога").team__wrapper-page-img
            .team__wrapper-page-info
                .team__wrapper-page-info-wrap
                    p.team__wrapper-page-info-wrap-text.left Нашою ціллю стала допомога армії, територіальній обороні, звичайним людям та дітям. Ми намагаємось забезпечити цих людей необхідними речами: амуніцією, їжею, засобами особистої гігієни, ліками та іншим. Команда проводить збори своїми коштів силами, закуповуємо необхідні речі, та доставляємо їх особисто в руки.
                    p.team__wrapper-page-info-wrap-text.bottom Кожен із вас може зробити цей внесок та врятувати чиєсь життя. Всього за один клік ви можете допомогти фінансово, та допомогти надіслати бронежилет війсковому, який не спить ночами та захищає український народ від загарбників.
                .team__wrapper-page-info-paragraph
                    .team__wrapper-page-info-paragraph-mark
                    p.team__wrapper-page-info-paragraph-text  Варто зазначити, що нам, як студентам, тяжко забезпечити всі фінансові витрати. <br> Тому для нас важлива ваша підтримка. Всі звіти про витрати можна отримати в <a href="https://t.me/pomozchazov" class="team__wrapper-page-info-paragraph-text-link" >Telegram</a> та <a href="https://instagram.com/sveta.k_s?igshid=YmMyMTA2M2Y=" class="team__wrapper-page-info-paragraph-text-link">Instagram</a> 
        .team__wrapper-photos
            img(src="~/assets/img/photo2.png" alt="Гуманітарна допомога").team__wrapper-photos-img
            img(src="~/assets/img/photo3.png" alt="Гуманітарна допомога").team__wrapper-photos-img
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    * {
        font-family: "Greenwich";
        max-width: 100vw;
    }

    .team {
        padding: 150px 0;
        display: flex;
        justify-content: center;
        &__wrapper {
            padding-left: 64px;
            &-title {
                font-size: 55px;
                margin-bottom: 50px;
                font-family: 'Greenwich-SemBd';
            }

            &-page {
                display: flex;

                &-img {
                    width: 343px;
                    height: 100%;
                    margin-right: 112px;
                }

                &-info {

                    &-wrap {
                        display: flex;
                        margin-bottom: 32px;

                        &-text {
                            max-width: 415px;
                            line-height: 1.25;

                            &:not(:last-child) {
                                margin-right: 32px;
                            }
                        }
                    }

                    &-paragraph {
                        display: flex;
                        margin-bottom: 76px;

                        &-mark {
                            content: " ";
                            background: #F9224B;
                            width: 8px;
                            height: 50px;
                            border-radius: 5px;
                            margin-right: 24px;
                        }

                        &-text {

                            &-link {
                                color: #F9224B;
                                &:hover {
                                    text-decoration: none;
                                }
                            }
                        }
                    }

                    
                }
            }
            &-photos {
                display: flex;
                margin-left: 454px;
                margin-top: -251px;
            &-img:not(:last-child) {
                margin-right: 32px;
                }
            }

        }
    }
@media screen and (min-width: 768px) and (max-width: 1439px){
.team {
    padding: 100px 0;
        &__wrapper {
            width: 100vw;
            padding-left: 0;
            &-title {
                font-size: 32px;
                max-width: 680px;
                margin: auto;
                margin-bottom: 40px;
            }

            &-page {
                margin-bottom: 21px;
                max-width: 680px;
                margin: auto;
                &-img {
                    margin-right: 24px;
                    width: 240px;
                }

                &-info {

                    &-wrap {
                        display: block;
                        
                        &-text {
                            font-size: 14px;
                            &:not(:last-child) {
                                margin-bottom: 16px;
                            }
                        }
                    }

                    &-paragraph {
                        max-width: 406px;
                        &-mark {
                            height: 72px;
                            width: 15px;
                        }

                        &-text {
                            font-size: 14px;
                            line-height: 1.3;
                        }
                    }

                    
                }
            }
            &-photos {
                max-width: 680px;
                margin: auto;
                &-img {
                    max-width: 328px;
                }
                &-img:not(:last-child) {
                    margin-right: 24px;
                }
            }

        }
    }
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .team {
    padding: 50px 0;
        &__wrapper {
            padding-left: 0;
            &-title {
                font-size: 24px;
                max-width: 328px;
                line-height: 1.3;
                margin: auto;
                margin-bottom: 24px;
            }

            &-page {
                flex-direction: row-reverse;
                position: relative;
                max-width: 328px;
                &-img {
                    margin-right: 0;
                    max-width: 152px;
                    height: 320px;
                    object-fit: cover;
                    border-radius: 10px;
                }

                &-info {

                    &-wrap {
                        
                        &-text {
                            font-size: 14px;
                            &.bottom {
                                max-width: 328px;
                                width: 328px;
                                position: absolute;
                                top: 341px;
                                left: 0;
                            }
                            &.left {
                                // margin-right: -50px;
                                position: absolute;
                                max-width: 152px;
                                top: 0;
                                left: 0;
                            }
                        }
                    }

                    &-paragraph {
                        display: flex;
                        position: absolute;
                        width: 320px;
                        font-size: 14px;
                        top: 452px;
                        left: 0;
                        &-mark {
                            margin-right: 13px;
                            height: 105px;
                        }
                    }

                    
                }
            }
            &-photos {
                margin-top: 274px;
                margin-left: 0;
                display: block;
                &-img {
                    max-width: 328px;
                    margin: auto;
                }
                &-img:not(:last-child) {
                    margin: auto;
                    margin-bottom: 24px;
                }
            }

        }
    }
}
</style>