<template>
  <main>
    <top-header></top-header>
    <section class="top">
      <progressive-img class="top-image" src="http://placehold.jp/1280x560.png" />
      <div class="top__content content_all_center">
        <h1 class="app__title top_content_title_color">子供にぴったりのアクティビティを探そう</h1>
        <router-link to="/activity" class="button button__top">
          <strong class="button_top_text_color">今すぐ始めよう</strong>
        </router-link>
      </div>
    </section>
    <section class="section">
      <div class="has-text-centered">
        <h2 class="heading">Kids Weekendとは？</h2>
      </div>
      <div class="app__about">
        <p class="app_about_text">
          お子様にぴったりのアクティビティを、
          <span>日付</span>、
          <span>年齢</span>、
          <span>場所</span>
          から簡単に検索・予約できるサービスです。
        </p>
        <p class="app_about_text">
          これ一つで、様々なジャンルのアクティビティにアクセス可能！
        </p>
        <p class="app_about_text">
          お子様に、今しかできない、かけがえのない体験をプレゼントしよう！
        </p>
      </div>
    </section>
    <section class="section">
      <div class="has-text-centered">
        <h2 class="heading">使い方</h2>
      </div>
      <div class="app__howtouse">
        <p>coming soon ...</p>
      </div>
    </section>
    <section class="section">
      <div class="has-text-centered">
        <h2 class="heading">アクティビティの種類</h2>
      </div>
      <div class="app__activity">
        <div class="columns is-multiline">
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">スポーツ</p>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">音楽</p>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">語学</p>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">アート</p>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">サイエンス</p>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="activity_category">
              <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              <p class="content_all_center activity_category_title">知育</p>
            </div>
          </div>
        </div>
        <router-link to="/activity" class="button button_category_display">
          <span>アクティビティを見てみる</span>
          <span class="is-hidden-mobile"><i class="fa fa-angle-right"></i></span>
        </router-link>
      </div>
    </section>
    <section class="section">
      <div class="has-text-centered">
        <h2 class="heading">プラン</h2>
      </div>
      <div class="columns is-desktop app__plan">
        <div class="column">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title has-text-centered">
                ベーシックプラン
              </p>
            </header>
            <div class="card-image">
              <figure class="image">
                <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="">３アクティビティ</span>
                  </p>
                </div>
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="">5,000円 / 月</span>
                  </p>
                </div>
                <div class="app_plan_basic no-border-plan">
                  <a type="button">
                    <span class="">詳細を見る</span>
                    <i class="fas fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title has-text-centered">
                ファミリープラン
              </p>
            </header>
            <div class="card-image">
              <figure class="image">
                <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="">6アクティビティ</span>
                  </p>
                </div>
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="">10,000円 / 月</span>
                  </p>
                </div>
                <div class="app_plan_basic no-border-plan">
                  <a type="button">
                    <span class="">詳細を見る</span>
                    <i class="fas fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title has-text-centered">
                スポットプラン
              </p>
            </header>
            <div class="card-image">
              <figure class="image">
                <progressive-img class="category-image" src="http://placehold.jp/400x256.png" />
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="">個別アクティビティごとの</span>
                  </p>
                </div>
                <div class="app_plan_basic">
                  <div class="app_plan_basic_icon">
                    <i class="fas fa-play"></i>
                  </div>
                  <p>
                    <span class="plan_menu_text">お支払い</span>
                  </p>
                </div>
                <div class="app_plan_basic no-border-plan">
                  <a type="button">
                    <span class="">詳細を見る</span>
                    <i class="fas fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <top-footer></top-footer>
  </main>
</template>

<script>
    import TopHeader from "../components/home/TopHeader";
    import TopFooter from "../components/home/TopFooter";

    export default {
        components: {
            TopHeader,
            TopFooter
        },
        data() {
            return {
            }
        },
        methods: {
        }
  }
</script>

<style lang="scss" scoped>
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
  .heading {
    position: relative;
    display: inline-block;
    margin: 30px 0 45px;
    padding-bottom: 15px;
    letter-spacing: 2px;
    font-size: 36px;
    font-weight: bold;

    &::before,
    &::after {
      content: '';
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      border-bottom: 1px solid #999;
    }

    &::before {
      bottom: 5px;
    }
  }
  .top {
    position: relative;

    .top-image {
      width: 100%;
      opacity: 0.6;
    }

    .top__content {
      font-weight: bold;
      font-family :Quicksand, sans-serif;
      z-index: 1;

      .app__title {
        font-size: 24px;
      }

      .top_content_title_color {
        color: white;
      }
    }
  }
  .button__top {
    width: 350px;
    height: 50px;
    background-color: #ffd046;
    border: 2px solid #ffd046;

    .button_top_text_color {
      color: white;
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

  .section {
    .app__about {
      text-align: center;

      .app_about_text {
        margin-bottom: 16px;
        line-height: 64px;
      }
    }
  }

  .app__howtouse {
    text-align: center;
  }

  .app__activity {
    text-align: center;

    .column.is-one-third {
      text-align: center;
    }

    .activity_category {
      position: relative;
    }

    .activity_category_title {
      font-size: 32px;
      font-weight: bold;
      font-family: Quicksand, sans-serif;
      z-index: 1;
    }

    .button_category_display {
      width: 350px;
      height: 50px;
      text-align: center;
      margin-top: 24px;
      padding: 8px;
      color: #57b8ff;
      border: 2px solid #57b8ff;
      border-radius: 4px;

      @media (max-width: 767px) {
        width: 100%;
      }
    }
  }


  @media screen and (max-width: 768px) {
    .top-content {
      top: 50%;
      width: 100%;
      padding: 0px 18px;
    }
    .title-expand {
      font-size: 15px;
      color: white;
    }
    .heading {
      font-size: 20px;
    }
    .btn-start-now {
      width: 175px;
    }
    .button_category_display {
      width: 100%;
    }
    .about-text {
      line-height: 32px;
    }
  }
</style>
