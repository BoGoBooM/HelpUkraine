<template lang="pug">
section.third(id="charity")
    .third__wrapper
        h2.third__wrapper-title Врятуй чиєсь життя та допоможи тим,  хто цього потребує
        .third__wrapper-grown
            img(src="~/assets/img/photo4.png" alt="Збір грошей для допомоги").third__wrapper-grown-img
            ul.third__wrapper-grown-list
                li.third__wrapper-grown-list-item
                    span.third__wrapper-grown-list-item-numb 01
                    p.third__wrapper-grown-list-item-text Збір коштів на потреби армії
                    a(href="https://pay.fondy.eu/s/rmku6cmMDPG8h4CA").third__wrapper-grown-list-item-link 
                        button.third__wrapper-grown-list-item-link-btn 
                        button.third__wrapper-grown-list-item-link-btn-tablet Підтримати
                li.third__wrapper-grown-list-item
                    span.third__wrapper-grown-list-item-numb 02
                    p.third__wrapper-grown-list-item-text Збір коштів на медикаменти 
                    a(href="https://pay.fondy.eu/s/rmku6cmMDPG8h4CA").third__wrapper-grown-list-item-link 
                        button.third__wrapper-grown-list-item-link-btn
                        button.third__wrapper-grown-list-item-link-btn-tablet Підтримати
                li.third__wrapper-grown-list-item(id="rep")
                    span.third__wrapper-grown-list-item-numb 03
                    p.third__wrapper-grown-list-item-text Збір коштів на їжу в райони гуманітарної катастрофи
                    a(href="https://pay.fondy.eu/s/rmku6cmMDPG8h4CA").third__wrapper-grown-list-item-link 
                        button.third__wrapper-grown-list-item-link-btn
                        button.third__wrapper-grown-list-item-link-btn-tablet Підтримати
        .third__wrapper-expens
            ul.third__wrapper-expens-list
                li.third__wrapper-expens-list-item
                    p.third__wrapper-expens-list-item-title Потреби армії
                    .third__wrapper-expens-list-item-wrap
                        .third__wrapper-expens-list-item-wrap-info
                            span.third__wrapper-expens-list-item-wrap-info-figures 204.540 ₴
                            p.third__wrapper-expens-list-item-wrap-info-text Витрачено на бронежилети, каски, уніформу та амуніцію для військових
                li.third__wrapper-expens-list-item
                    p.third__wrapper-expens-list-item-title Медикаменти
                    .third__wrapper-expens-list-item-wrap
                        .third__wrapper-expens-list-item-wrap-info
                            span.third__wrapper-expens-list-item-wrap-info-figures 32.690 ₴
                            p.third__wrapper-expens-list-item-wrap-info-text Витрачено на ліки для діабетиків та тих, хто їх потребує в першу чергу
                li.third__wrapper-expens-list-item
                    p.third__wrapper-expens-list-item-title Їжа та речі першої необхідності
                    .third__wrapper-expens-list-item-wrap
                        .third__wrapper-expens-list-item-wrap-info
                            span.third__wrapper-expens-list-item-wrap-info-figures 24.590 ₴
                            p.third__wrapper-expens-list-item-wrap-info-text Витрачено на допомогу в районах гуманітарної катастрофи
        .third__wrapper-player
            iframe(id='video' v-bind:key="video" ref="video" controls width="1312" height="720" src="https://www.youtube.com/embed/S1W_PuL5ASs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen).third__wrapper-player-video
            //- button(type="button"  v-if="showButton" @click="onPlay" id="btn"  ).third__wrapper-player-btn play

</template>

<script>

export default {

}
</script>

<style lang="scss" scoped>

* {
    font-family: "Greenwich";
    color: #fff;
    background: #000;
    max-width: 100vw;
    
}

.third {
    padding: 150px 0;
    width: 100vw;
    display: flex;
    justify-content: center;
    border-radius: 20px;
    &__wrapper {

        &-title {
            font-size: 55px;
            font-weight: 500;
            line-height: 1.1;
            margin-bottom: 50px;
            max-width: 1165px;
        }

        &-grown {
            display: flex;
            margin-bottom: 80px;


            &-img {
                margin-right: 112px;
            }

            &-list {

                &-item {
                    display: flex;
                    align-items: center;
                    position: relative;
                    width: 864px;
                    border-bottom: 1px solid #3F3F3F;
                    border-top: 1px solid #3F3F3F;
                    margin-bottom: -3px;
                    padding: 26px;



                    &-numb {
                        margin: 24px 49px;
                        color: #F9224B;
                        font-size: 20px;
                    }

                    &-link {
                        position: absolute;
                        background: none;
                        right: 80px;
                        height: 24px;
                        text-decoration: none;



                        &-btn {
                            
                            content: " ";
                            background: #F9224B;
                            width: 24px;
                            height: 24px;
                            border-radius: 15px;
                            border: 1px solid #F9224B;
                            


                            &:hover::before {
                                content: "Підтримати";
                                background: #F9224B;
                                padding: 20px 49px;
                                border-radius: 5px;
                                margin-left: -80px;
                            }
                            &-tablet {
                                display: none;
                                background: #F9224B;
                                padding: 16px 58px;
                                border-radius: 5px;
                                border: none;
                                text-decoration: none;
                                margin-top: -11px;
                                margin-right: -78px;
                                
                            }

                        }
                    }
                }
            }
        }

        &-expens {


            &-list {
                display: flex;

                &-item {
                    
                    max-width: 416px;

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

                    &-title {
                        margin-bottom: 24px;
                    }

                    &-wrap {
                        width: 416px;
                        height: 155px;
                        background: radial-gradient(91.37% 141.18% at 14.31% 20.77%, rgba(140, 140, 140, 0.2) 0%, rgba(177, 185, 190, 0.06) 77.08%, rgba(134, 167, 198, 0.01) 100%);
                        background-blend-mode: overlay, normal;
                        
                        border-radius: 15px;
                        margin-right: 32px;

                        &-info {
                            background: none;
                            padding: 34px 0 10px 32px;

                            &-figures {
                                background: none;
                                font-size: 32px;
                                font-family: 'Greenwich-Med';
                                color: #F9224B;
                                font-weight: 700;

                            }

                            &-text {
                                background: none;
                            }
                        }
                        
                    }
                }
            }
        }

        &-player {
            margin-top: 80px;
            position: relative;
            width: 1312px;
            &-video {
                position: relative;
                border-radius: 30px;

            }

            &-btn {
                display: block;
                color: #F9224B;
                cursor: pointer;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 116px;
                height: 116px;
                background: #101012;
                border: 10px solid #18181C;
                outline: 6px solid #212126;
                outline-offset: -1px;
                border-radius: 66px;
                z-index: 1;
                &.disactive {
                    display: none;
                }
            }
        }
    }
}
@media screen and (min-width: 768px) and (max-width: 1439px){
.third {
    padding: 70px 0;
    display: block;
    &__wrapper {

        &-title {
            font-size: 32px;
            max-width: 680px;
            margin: auto;
        }

        &-grown {
            justify-content: center;
            margin-top: 50px;

            &-img {
                display: none;
            }

            &-list {
                 
                    max-width: 680px;
                &-item {
                   
                    max-width: 680px;

                    &-text {
                        max-width: 330px;
                    }


                    &-numb {
                        margin: 24px 16px;
                    }

                    &-link {
                        &-btn-tablet {
                                display: block;
                            }


                        &-btn {
                            display: none;

                            &-tablet {
                                display: block;
                            }
                            

                        }
                        
                    }
                }
            }
        }

        &-expens {
            justify-content: center;
            margin-bottom: 50px;

            &-list {
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                grid-template-rows: 1fr 1fr; 
                gap: 32px 26px; 
                grid-template-areas: 
                    "first second"
                    "third .";
                justify-content: stretch;
                align-content: center;
                justify-items: stretch;
                align-items: stretch;
                margin: auto;
                max-width: 680px;

                &-item {
                    max-width: 328px;
                    &:not(:last-child) {
                        margin-right: 0;
                    }

                    &-wrap {
                        max-width: 328px;
                        &-info {
                            max-width: 270px;
                            &-figures {
                                font-size: 24px;
                            }

                            &-text {
                                font-size: 14px;
                            }
                        }
                        
                    }
                }
            }
        }

        &-player {
            max-width: 680px;
            margin: auto;
            &.iframe {
                width: 680px;
            }
            &-video {
                width: 685px;
                height: 452px;
            }

            &-btn {
                width: 89px;
                height: 89px;
            }
        }
    }
}
}
@media screen and (min-width: 360px) and (max-width: 767px){
    .third {
    padding: 70px 0;
    display: block;
    &__wrapper {

        &-title {
            font-size: 24px;
            max-width: 328px;
            margin: auto;
            margin-bottom: 32px;
        }

        &-grown {
            max-width: 328px;
            margin: auto;
            margin-bottom: 24px;

            &-img {
                display: none;
            }

            &-list {
                 
                 
                &-item {
                    max-width: 328px;
                   

                    &-text {
                        font-size: 14px;
                        max-width: 118px;
                    }


                    &-numb {
                        margin: 0;
                        margin-right: 18px;
                        margin-left: -18px;
                    }

                    &-link {
                       


                        &-btn {
                            display: none;

                            &-tablet {
                                display: block;
                                padding: 11px 35px;
                                margin-right: -70px;
                            }
                            

                        }
                        
                    }
                }
            }
        }

        &-expens {

            &-list {
                display: grid; 
                grid-template-columns: 1fr; 
                grid-template-rows: 1fr 1fr 1fr; 
                gap: 24px 0px; 
                grid-template-areas: 
                    "first"
                    "second"
                    "third";
                    margin: auto;
                    max-width: 328px;
                &-item {
                    &:not(:last-child) {
                        margin-right: 0;
                    }

                    
                   

                    &-title {
                        margin-bottom: 16px;
                    }

                    &-wrap {
                        max-width: 328px;
                        margin: auto;
                        &-info {
                            
                            &-figures {
                                font-size: 24px;
                                margin-bottom: 8px;
                            }

                            &-text {
                                font-size: 14px;
                                max-width: 269px;
                            }
                        }
                        
                    }
                }
            }
        }

        &-player {
            max-width: 328px;
            max-height: 220px;
            margin: auto;
            margin-top: 32px;
            &.iframe {
                width: 328px;
                height: 219px;
            }
            &-video {
                
                width: 328px;
                height: 219px;
            }

            &-btn {
                width: 73px;
                height: 73px;
            }
        }
    }
}
}
</style>