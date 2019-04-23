<template>
  <main>
      <section class="section section__about demo">
          <div class="has-text-centered">
              <h2 class="heading">GGA特別サイト</h2>
          </div>
          <div class="app__about">
              <p class="app_about_text">
                  <span>本日は、ジーズアカデミー東京LAB6期<br class="tablet">Global Geek Auditionへお越しいただきまして、<br class="tablet">ありがとうございます。</span><br class="tablet"><br class="tablet">
                  <span>アクティビティ参加型 親の時間づくりサービス<strong>Kidsweekend</strong>です。</span><br><br class="is-hidden-desktop">
                  <span>現在5月上旬のサービスローンチに向け、ビジネス・開発せっせと準備中です(下にundifinedが...笑)。楽しみにお待ちいただけると幸いです。</span><br class="tablet"><br class="tablet">
                  <span>会場ではKidsweekend Tシャツを着ていますので、懇親会でのお声がけ・名刺交換等をよろしくお願いいたします！</span><br><br class="is-hidden-desktop">
                  <span></span>
              </p>
          </div>
      </section>
      <section class="top">
          <div class="top-image" >
              <progressive-img src="./images/app_top_image.jpg" style="max-width: 100%" />
          </div>
          <div class="top__content content_all_center">
              <h1 class="app__title top_content_title_color">こどもの好きを見つけよう</h1>
              <p class="top__content--detail">こどもの「やりたい」を好きなだけ体験できる新しい学びスタイル</p>
              <div class="top__search">
                  <div class="top__search--calendar_box">
                      <span>カレンダーから探す</span>
                  </div>
                  <div class="top__search--age_box">
                      こどもの年齢
                  </div>
                  <router-link to="/" class="button button__top" disabled>
                      <strong class="button_top_text_color">検索</strong>
                  </router-link>
              </div>
          </div>
      </section>
      <section class="section section__about">
          <div class="has-text-centered">
              <h2 class="heading">kidsweekendのメリット</h2>
          </div>
          <div class="app__about">
              <p class="app_about_text">
                  <span>お子様の興味に合わせて、様々なジャンルの習い事やアクティビティを、</span><br class="is-hidden-mobile">
                  <span>年齢、場所、時間から簡単に検索し予約できるサービスです。</span><br><br class="is-hidden-desktop">
                  <span>一回参加型のアクティビティを中心に、興味のあるものを好きなだけ体験する中で、</span><br class="is-hidden-mobile">
                  <span>子供の「好き」や「好奇心」を広げます。</span><br><br class="is-hidden-desktop">
                  <span>kidsweekendは未来を生き抜く子供たちに新しい学びのカタチを提供します！</span>
              </p>
          </div>
      </section>
      <section class="section section__howtouse">
          <div class="has-text-centered">
              <h2 class="heading">つかいかた</h2>
          </div>
          <div class="section__howtouse_container">
              <div class="columns">
                  <div class="column is-one-third">
                     <div class="section__howtouse_container_boxes">
                        <div class="section__howtouse_container_box">
                            <progressive-img class="section__howtouse_container_image" src="./images/sp_find_image.png" />
                            <h3 class="section__howtouse_container--title">
                                さがす
                            </h3>
                            <p class="section__howtouse_container--description">
                                <span>日付、年齢、場所から</span><br>
                                <span>アクティビティを見つける</span>
                            </p>
                        </div>
                     </div>
                  </div>
                  <div class="column is-one-third">
                      <div class="section__howtouse_container_boxes">
                          <div class="section__howtouse_container_box">
                              <progressive-img class="section__howtouse_container_image" src="./images/sp_reserve_image.png" />
                              <h3 class="section__howtouse_container--title">
                                  予約する
                              </h3>
                              <p class="section__howtouse_container--description">
                                  <span>気に入ったアクティビティを</span><br>
                                  <span>そのまま簡単に予約する</span>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="column is-one-third">
                      <div class="section__howtouse_container_boxes">
                          <div class="section__howtouse_container_box">
                              <progressive-img class="section__howtouse_container_image" src="./images/sp_experience_image.png" />
                              <h3 class="section__howtouse_container--title">
                                  体験する
                              </h3>
                              <p class="section__howtouse_container--description">
                                  <span>あとは、お子様を連れていくだけ</span>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="howtouse__bottom_design"></div>
      </section>
      <!--<section class="section section__map">-->
          <!--<div class="has-text-centered">-->
              <!--<h2 class="heading">さがす</h2>-->
          <!--</div>-->
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.136778601478!2d139.77721867614565!3d35.66300417079383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018897aedbe5ad5%3A0xc39f1c150c87bb4c!2z44CSMTA0LTAwNTIg5p2x5Lqs6YO95Lit5aSu5Yy65pyI5bO2!5e0!3m2!1sja!2sjp!4v1550132889669" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
      <!--</section>-->
      <section class="section section__activity">
          <div class="section_activity_container">
              <div class="has-text-centered">
                  <h2 class="heading">アクティビティの種類</h2>
              </div>
              <div class="app__activity">
                  <recommend-top-card-list></recommend-top-card-list>
                  <div class="more_button_container">
                      <a class="button button_category_display" disabled>
                          <span>もっとみる</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      <section class="end">
          <div class="end-image">
              <progressive-img src="./images/app_end_image.jpg" style="max-width: 100%" />
          </div>
          <div class="end__content content_all_center">
              <h1 class="app__title end__content--title_color">今すぐこどもの好きを発見しよう</h1>
              <p class="end__content--detail">好きなだけ体験できる新しい学びスタイル</p>
              <!--<router-link to="/register" class="button button__end">-->
                  <!--<strong class="button_end_text_color">登録する</strong>-->
              <!--</router-link>-->
          </div>
      </section>
  </main>
</template>

<script>
    import RecommendTopCardList from "../../../components/modules/cards/recommends-top-card/RecommendsTopCardListLogic";

    export default {
        components: {
            RecommendTopCardList
        },
        data() {
            return {
                'top_image': '/images/app_top_image.jpg',
            }
        },
        methods: {}
    }
</script>

<style lang="scss" scoped>
    @import '../../../../sass/variables';
    .mobile {
        @media screen and (max-width: 768px) {
            display: none;
        }
    }
    .tablet {
        @media screen and (min-width: 768px) {
            display: none;
        }
    }
    .demo {
        margin-top: 18px;
        @media screen and (max-width: 768px){
            margin-top: 63px;
        }
    }
    .top {
        position: relative;
        /*text-align: center;*/
        @media screen and (max-width: 768px){
            margin-top: 63px;
        }
        .top-image {
            width: 100%;
            height: auto;
            z-index: 99;
            opacity: 1.5;
        }
        .top__content {
            font-weight: bold;
            font-family :Quicksand, sans-serif;
            z-index: 100;
            .app__title {
                font-size: 40px;
                font-weight: bold;
                @media screen and (max-width: 768px) {
                    font-size: 23px;
                }
            }
            &--detail {
                color: white;
                font-size: 18px;
                margin-bottom: 35px;
                @media screen and (max-width: 768px) {
                    margin-bottom: 12px;
                    font-size: 12px;
                }
            }
            .top__search {
                display: flex;
                &--calendar_box {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 2px;
                    height: 53px;
                    width: 290px;
                    background-color: white;
                    color: $skyBlue;
                    font-size: 18px;
                    @media screen and (max-width: 768px) {
                        width: 100px;
                        height: 45px;
                        font-size: 8px;
                    }
                }
                &--age_box {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 2px;
                    height: 53px;
                    width: 260px;
                    background-color: white;
                    color: $skyBlue;
                    font-size: 18px;
                    @media screen and (max-width: 768px) {
                        width: 100px;
                        height: 45px;
                        font-size: 8px;
                    }
                }
            }
            .top_content_title_color {
                color: white;
            }
            .button__top {
                margin: 2px;
                width: 150px;
                height: 53px;
                background-color: $pink;
                border: 2px solid $pink;
                @media screen and (max-width: 768px) {
                    width: 75px;
                    height: 45px;
                    font-size: 12px;
                }
                .button_top_text_color {
                    color: white;
                }
            }
        }
    }
    .content {
        .app_plan_basic {
            display: flex;
            color: #084887;
            padding: 16px 0;
            border-bottom: 1px solid #EBEBEB;
            .app_plan_basic_icon {
                color: #03cea4;
                margin-right: 16px;
            }
        }
        .no-border-plan {
          border-bottom: none;
        }
    }
    .section__about {
        @media screen and (min-width: 1024px) {
            margin: 0 auto;
            max-width: 980px;
        }
        .app__about {
            text-align: center;
            .app_about_text {
                margin-bottom: 16px;
                line-height: 32px;
                @media screen and (max-width: 768px) {
                    font-size: 14px;
                }
            }
        }
    }
    .section__howtouse {
        position: relative;
        background-color: $lightGreen;
        padding-bottom: 64px;
        color: white;
        &_container {
            .columns {
                @media screen and (min-width: 768px) {
                    margin: 0 auto;
                    max-width: 980px;
                    width: 100%;
                    .column.is-one-third {
                        text-align: center;
                        .section__howtouse_container_boxes {
                            text-align: center;
                            .section__howtouse_container--image {
                                border-radius: 8px;
                            }
                            .section__howtouse_container--title {
                                font-weight: bold;
                                font-size: 24px;
                                margin-bottom: 8px;
                            }
                            .section__howtouse_container--description {
                                font-size: 12px;
                            }
                        }
                    }
                }
                @media screen and (max-width: 768px) {
                    .column.is-one-third {
                        text-align: center;
                        margin-bottom: 24px;
                        .section__howtouse_container_boxes {
                            text-align: center;
                        }
                        .section__howtouse_container--title {
                            font-weight: bold;
                            font-size: 24px;
                            margin-bottom: 8px;
                        }
                        .section__howtouse_container--description {
                            font-size: 16px;
                        }
                    }
                }
            }
        }
        .howtouse__bottom_design {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding-bottom: 24px;
            background-color: $skyBlue;
        }
    }
    .section__map {
         @media screen and (min-width: 1024px) {
            margin: 0 auto;
            max-width: 980px;
        }
    }
    .section__activity {
        margin: auto 0;
        @media screen and (min-width: 1024px) {
            margin: 0 auto;
            max-width: 980px;
        }
        .app__activity {
            text-align: center;
            @media screen and (min-width: 1024px) {
                max-width: 980px;
            }
            .column.is-one-third {
                text-align: center;
                .activity__container {
                    text-align: left;
                    width: 100%;
                    color: #7a7a7a;
                    font-size: 12px;
                    .activity_container_images {
                        position: relative;
                        text-align: center;
                        &--image {
                            border-radius: 8px;
                        }
                        &--title {
                            position: absolute;
                            bottom: 48px;
                            right: 24px;
                            left: 0px;
                            z-index: 10;
                            text-align: right;
                            font-weight: bold;
                            font-size: 36px;
                            letter-spacing: 5px;
                            color: white;
                        }
                    }
                    .activity_container_category_name {
                        color: $lightGreen;
                    }
                    .activity_container_title {
                        &--detail {
                            font-weight: bold;
                            font-size: 18px;
                        }
                    }
                    .activity_container_time_price {
                    }
                    .activity_container_child_age {
                    }
                }
            }
            .more_button_container {
                .button_category_display {
                    width: 720px;
                    height: 50px;
                    text-align: center;
                    margin-top: 24px;
                    padding: 8px;
                    color: white;
                    background-color: $lightGreen;
                    border: 2px solid $lightGreen;
                    border-radius: 4px;
                    font-weight: bold;
                    @media screen and (max-width: 768px) {
                        width: 100%;
                    }
                    &:hover {
                        opacity: 0.7;
                    }
                }
            }
        }
    }
    .end {
        position: relative;
        text-align: center;
        .end-image {
            max-width: 100%;
            z-index: 99;
        }
        .end__content {
            padding: 24px;
            font-weight: bold;
            font-family :Quicksand, sans-serif;
            z-index: 100;
            width: 100%;
            @media screen and (max-width: 768px) {
                padding: 0px;
            }
            .app__title {
                font-size: 40px;
                margin-bottom: 8px;
                @media screen and (max-width: 768px) {
                    font-size: 23px;
                }
            }
            &--title_color {
                color: white;
                font-weight: bold;
            }
            &--detail {
                color: white;
                font-size: 18px;
                margin-bottom: 35px;
                @media screen and (max-width: 768px) {
                    margin-bottom: 12px;
                    font-size: 12px;
                }
            }
            .button__end {
                width: 350px;
                height: 50px;
                background-color: $pink;
                border: 2px solid $pink;
                @media screen and (max-width: 768px) {
                    width: 80%;
                    height: 30px;
                    font-size: 12px;
                }
                .button_end_text_color {
                    color: white;
                }
            }
        }
    }
    .section {
        @media screen and (min-width: 1024px) {
            margin: 0 auto;
        }
    }
    .heading {
        position: relative;
        display: inline-block;
        margin: 30px 0 45px;
        padding-bottom: 15px;
        letter-spacing: 5px;
        font-size: 36px;
        color: $darkBlue;
        font-weight: bolder;
        &::before {
            width: 50%;
            content: '';
            position: absolute;
            right: 0;
            bottom: 0;
            left: 25%;
            border-bottom: 2px solid $darkBlue;
        }
        @media screen and (max-width: 768px) {
            font-size: 20px;
        }
    }
    .content_all_center {
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        margin:0;
        padding:0;
    }
</style>
