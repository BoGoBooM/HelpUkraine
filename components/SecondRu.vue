<template lang="pug">
section.team(id="about") 
    .team__wrapper
        h2.team__wrapper-title Команда студентов, которые объединились, чтобы помочь своей стране.
        .team__wrapper-page 
            img(src="~/assets/img/photo1.png" alt="Гуманітарна допомога").team__wrapper-page-img
            .team__wrapper-page-info
                .team__wrapper-page-info-wrap
                    p.team__wrapper-page-info-wrap-text.left Нашей целью стала помощь армии, территориальной обороне, обычным людям и детям. Мы стараемся обеспечить этих людей необходимыми вещами: амуницией, едой, средствами личной гигиены, лекарствами и прочим. Команда проводит сбор денегсвоими силами, закупает необходимые вещи и доставляет их лично в руки.
                    p.team__wrapper-page-info-wrap-text.bottom Каждый из вас может внести этот вклад и спасти жизнь. Всего в один клик вы можете помочь финансово, и прислать бронежилет военному, который не спит ночами и защищает украинский народ от захватчиков.
                .team__wrapper-page-info-paragraph
                    .team__wrapper-page-info-paragraph-mark
                    p.team__wrapper-page-info-paragraph-text Стоит отметить, что нам как студентам тяжело обеспечить все финансовые расходы. <br> Поэтому для нас важна ваша поддержка. Все отчеты о расходах можно получить в <a href="https://t.me/pomozchazov" class="team__wrapper-page-info-paragraph-text-link" >Telegram</a> и <a href="https://instagram.com/sveta.k_s?igshid=YmMyMTA2M2Y=" class="team__wrapper-page-info-paragraph-text-link">Instagram</a>
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
        max-width: 1165px;
        margin: 0 auto;
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
                        &-head {
                            max-width: 331px;
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