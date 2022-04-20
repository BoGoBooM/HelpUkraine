<template lang="pug">
  section.fifth 
    .fifth__wrapper
        h2.fifth__wrapper-title Маєш можливість допомогти або сам потребуеш допомоги?
        ul.fifth__wrapper-list 
            li.fifth__wrapper-list-item 
                button(type="button").fifth__wrapper-list-item-btn.active Хочу допомогти
            li.fifth__wrapper-list-item 
                button(type="button").fifth__wrapper-list-item-btn Потребую допомоги
        .fifth__wrapper-wrap.active
            form(action="#").fifth__wrapper-wrap-form
                input(type="text" placeholder="Ваше ім’я").fifth__wrapper-wrap-form-name
                .fifth__wrapper-wrap-form-menu
                    a.fifth__wrapper-wrap-form-menu-contry
                        img(src="~/assets/img/Ua.svg" alt="Номер країни").fifth__wrapper-wrap-form-menu-contry-img
                        img(src="~/assets/img/arrNumb.svg" alt="").fifth__wrapper-wrap-form-menu-contry-arrow
                    input(type="tel" placeholder="+380 (99) 999-99-99").fifth__wrapper-wrap-form-menu-phone
                input(type="text" placeholder="Ваше місто").fifth__wrapper-wrap-form-city
                input(type="text" placeholder="Чим вам потрібно допомогти?").fifth__wrapper-wrap-form-help
                .fifth__wrapper-wrap-form-submit 
                    input(type="submit" value="Відправити").fifth__wrapper-wrap-form-submit-btn
                    p.fifth__wrapper-wrap-form-submit-confid Натискуючи кнопку «відправити» я даю згоду на обробку персональних даних
            .fifth__wrapper-wrap-info
                p.fifth__wrapper-wrap-info-text Яйщо ви опинились в скрутному положенні, зверніться до нас, опишіть вашу проблему і ми зробимо все можливе, щоб допомогти вам! 
                p.fifth__wrapper-wrap-info-text Ви обов’язково будете почуті, адже, тільки, допомогая один одному, ми переможемо ворога!
                img(src="~/assets/img/photo6.png" alt="Допомога постраждалим").fifth__wrapper-wrap-info-img 
        .fifth__wrapper-wrap 
            form(action="#").fifth__wrapper-wrap-form
                input(type="text" placeholder="Ваше ім’я").fifth__wrapper-wrap-form-name
                .fifth__wrapper-wrap-form-menu
                    a.fifth__wrapper-wrap-form-menu-contry
                        img(src="~/assets/img/Ua.svg" alt="Номер країни").fifth__wrapper-wrap-form-menu-contry-img
                        img(src="~/assets/img/arrNumb.svg" alt="").fifth__wrapper-wrap-form-menu-contry-arrow
                    input(type="tel" placeholder="+380 (99) 999-99-99").fifth__wrapper-wrap-form-menu-phone
                input(type="text" placeholder="Ваше місто").fifth__wrapper-wrap-form-city
                input(type="text" placeholder="Чим вам потрібно допомогти?").fifth__wrapper-wrap-form-help
                .fifth__wrapper-wrap-form-submit 
                    input(type="submit" value="Відправити").fifth__wrapper-wrap-form-submit-btn
                    p.fifth__wrapper-wrap-form-submit-confid Натискуючи кнопку «відправити» я даю згоду на обробку персональних даних
            .fifth__wrapper-wrap-info
                p.fifth__wrapper-wrap-info-text Стань частиною нашої команди, зроби свій внесок в перемогу України. Передай одяг, їжу, ліки, допоможи з евакуацією або запропонуй іншу допомогу сам. 
                p.fifth__wrapper-wrap-info-text Врятуй чиєсь життя, адже, тільки, допомогаючи один одному, ми переможемо ворога!
                img(src="~/assets/img/photo5.png" alt="Допомога постраждалим").fifth__wrapper-wrap-info-img
            
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
                    &-contry {
                        display: flex;
                        align-items: center;
                        margin-left: 15px;
                        cursor: pointer;
                        &-img {
                            margin-right: 2px;
                            width: 100%;
                            height: 18px;
                        }
                        &-arrow {
                            width: 40%;
                            height: 7px;
                        }
                    }
                    
                    &-phone {
                    width: 468px;
                    height: 52px;
                    border: none;
                    background: none;
                    margin-bottom: 30px;
                    color: #fff;
                    padding-left: 15px;
                    font-size: 16px;
                    
                    &::placeholder { 
                        color: #fff;
                        font-size: 16px;
                        margin-left: 50px;

                    }
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
                    &.active {
                    }
                    &:hover {
                        
                    }
                }
            }
        }
        &-wrap {
            &.active {
                display: block;
            }
            &-form {
                margin-top: 135px;
                &-name {
                    
                    &::placeholder { 
                    }
                }
                &-menu {
                    &-contry {
                        &-img {
                        }
                        &-arrow {
                        }
                    }
                    
                    &-phone {
                    
                    &::placeholder { 
                    }
                }
                }
                
                &-city {
                    
                    &::placeholder { 
                        
                    }
                }
                &-help {
                    
                    &::placeholder { 
                    }
                }
                &-submit {
                    &-btn {
                    }
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
                    &.active {
                    }
                    &:hover {
                        
                    }
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
                    &::placeholder { 
                    }
                }
                &-menu {
                    max-width: 328px;
                    &-contry {
                        max-width: 328px;
                        margin: auto;
                        margin-bottom: 20px;

                        &-img {
                            margin-left: 16px;
                        }
                        &-arrow {
                        }
                    }
                    
                    &-phone {
                        max-width: 328px;
                        margin: auto;
                        text-align: center;
                    &::placeholder { 
                    }
                }
                }
                
                &-city {
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 20px;
                    &::placeholder { 
                        
                    }
                }
                &-help {
                    
                    max-width: 328px;
                    margin: auto;
                    margin-bottom: 40px;
                    &::placeholder { 
                    }
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