<template lang="pug">
section.fourth
    .fourth__wrapper
        .fourth__wrapper-wrap 
            .fourth__wrapper-wrap-head 
                h2.fourth__wrapper-wrap-head-title The process of our work is very simple
                p.fourth__wrapper-wrap-head-text We help everyone who needs it
            .fourth__wrapper-wrap-description
                p.fourth__wrapper-wrap-description-text We treat each stage responsibly.  Honesty and transparency are important to us.  We believe that good will always triumph over evil! 
                a(href="#forms").fourth__wrapper-wrap-description-link Get help
        .fourth__wrapper-help 
            ul.fourth__wrapper-help-list 
                li.fourth__wrapper-help-list-item
                    span.fourth__wrapper-help-list-item-numb 01
                    p.fourth__wrapper-help-list-item-text  Disseminating information about fundraising and actually the fundraising. So we would be grateful for your reposts!
                li.fourth__wrapper-help-list-item
                    span.fourth__wrapper-help-list-item-numb 02
                    p.fourth__wrapper-help-list-item-text Purchase of personal protective equipment, ammunition and humanitarian aid for our defenders and hospitals.
                li.fourth__wrapper-help-list-item
                    span.fourth__wrapper-help-list-item-numb 03
                    p.fourth__wrapper-help-list-item-text we distribute and deliver everything collected from hand to hand. reporting is carried out on this <a class="fourth__wrapper-help-list-item-text-link" href="#numbers">website</a>, social networks and telegram channel.
        .fourth__wrapper-report(id="report")
            .fourth__wrapper-report-info 
                h2.fourth__wrapper-report-info-title Reporting on work performed
                .fourth__wrapper-report-info-paragraph 
                    .fourth__wrapper-report-info-paragraph-wrap
                        p.fourth__wrapper-report-info-paragraph-wrap-text Reporting on work performed.  We actively maintain our accounts on social networks Instagram and Facebook, where we broadcast our activities.  Why is this important?   
                        p.fourth__wrapper-report-info-paragraph-wrap-text This helps us to cover our work in pages and posts.  We regularly report on the amount collected and show that we need to help each other now at such a difficult time for Ukraine.  
                        p.fourth__wrapper-report-info-paragraph-wrap-text  We will be very grateful for your support, reposts and dissemination of information about fundraising.
                    .fourth__wrapper-report-info-paragraph-box
                        p.fourth__wrapper-report-info-paragraph-box-text  You can see the results of our work and your contribution to the defense of our state every day in our photos.
                        p.fourth__wrapper-report-info-paragraph-box-follow Follow us on social networks:
                        .fourth__wrapper-report-info-paragraph-box-links
                            a(href="#").fourth__wrapper-report-info-paragraph-box-links-link Instagram
                                img(src="~/assets/img/arrLink.svg" alt="Соціальна мережа").fourth__wrapper-report-info-paragraph-box-links-link-img
                            a(href="#").fourth__wrapper-report-info-paragraph-box-links-link Telegram
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