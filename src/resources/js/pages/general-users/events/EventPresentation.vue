<template>
    <div>
        <div v-if="isLoading" class="loading__container">
            <fade-loader class="loading"></fade-loader>
        </div>
        <div v-else class="section">
            <div class="event__detail">
                <div class="columns event__detail__container">
                    <div class="column is-one-quarter">
                        <div class="side-menu">
                            <progressive-img src="/images/top_recommend_image_01.jpg" />
                        </div>
                    </div>
                    <div class="column event__detail__wrapper">
                        <div class="event__detail__wrapper__main">
                            <div class="event__detail__wrapper__main--content">
                                <div class="school_name">
                                    <span>{{ school.name }}</span>
                                </div>
                                <div class="event_title">
                                    <h1 class="event_title--expand">{{ activity.name }}</h1>
                                </div>
                                <div class="icon_group">
                                    <div class="icon_group--item">
                                        <div class="icon_group--item_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div>
                                            <p class="">
                                                <span>東京</span>
                                                <span>月島</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon_group--item">
                                        <div class="icon_group--item_icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div>
                                            <p class=""><time datetime="2016-1-1">{{ event.started_at }}</time></p>
                                        </div>
                                    </div>
                                    <div class="icon_group--item">
                                        <div class="icon_group--item_icon">
                                            <i class="fas fa-weight-hanging"></i>
                                        </div>
                                        <div>
                                            <p class="">スナック、ドリンク、用具</p>
                                        </div>
                                    </div>
                                    <div class="icon_group--item">
                                        <div class="icon_group--item_icon">
                                            <i class="fas fa-child"></i>
                                        </div>
                                        <div>
                                            <p class="">
                                                <span>{{ event.target_min_age }}</span>
                                                <span> 〜 </span>
                                                <span>{{ event.target_max_age }}才</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon_group icon_group--item event_recommend_comment">
                                    <div class="icon_group--item_icon">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div>
                                        <p>5つ星470件超え！絶賛の嵐の体験です。</p>
                                    </div>
                                </div>
                                <div class="event_detail school_detail">
                                    <div class="school_detail--left_part">
                                        <div class="about">
                                            <p class="heading">スクールについて</p>
                                            <p>{{ school.detail }}</p>
                                        </div>
                                    </div>
                                    <div class="school_detail--right_part">
                                        <div class="image_box">
                                            <figure class="image">
                                                <progressive-img src="http://placehold.jp/48x48.png" />
                                            </figure>
                                        </div>
                                        <div class="school_info">
                                            <p class="heading heading--school">{{ school.name }}</p>
                                            <a class="school_contact">
                                                スクールに連絡する
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_detail experience_detail">
                                    <div class="event_detail--left_part">
                                        <div class="about">
                                            <p class="heading">体験できること</p>
                                            <p>
                                                {{ activity.detail }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="event_detail--right_part">
                                    </div>
                                </div>
                                <div class="event_detail bring_detail">
                                    <div class="event_detail--left_part">
                                        <div class="about">
                                            <p class="heading">持ち物</p>
                                            <p>
                                                着物の下に着るためのTシャツなどの薄着をご用意ください。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="event_detail--right_part">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-one-quarter">
                        <p class="title event__detail--title">体験実施場所の紹介</p>
                    </div>
                    <div class="column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.136778601478!2d139.77721867614565!3d35.66300417079383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018897aedbe5ad5%3A0xc39f1c150c87bb4c!2z44CSMTA0LTAwNTIg5p2x5Lqs6YO95Lit5aSu5Yy65pyI5bO2!5e0!3m2!1sja!2sjp!4v1546488873633" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="columns schedule__container">
                    <div class="column is-one-quarter">
                        <p class="title event__detail--title">今後の開催予定</p>
                    </div>
                    <div class="column schedule__container__wrapper">
                        <div class="schedule__container__wrapper__main">
                            <div>
                                <div class="schedule">
                                    <div class="schedule__about">
                                        <div style="padding: 0px 32px">
                                            <div class="schedule__about__container">
                                                <div class="schedule__about__container--card" style="padding: 24px 0px">
                                                    <div class="schedule__about__container--card_date">
                                                        <span>1月8日 火曜日</span>
                                                        <span class="" aria-hidden="true">|</span>
                                                        <span>10:00 − 12:00</span>
                                                    </div>
                                                    <div class="schedule__about__container--card_price">
                                                        <span>¥</span>
                                                        <span>{{ event.price }} / 人</span>
                                                        <span>.残席あと{{ event.capacity_members }}名</span>
                                                    </div>
                                                </div>
                                                <div class="schedule__about__container--card_button">
                                                    <a class="button button__expand">選択</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns note__container">
                    <div class="column is-one-quarter">
                        <p class="title event__detail--title">留意事項</p>
                    </div>
                    <div class="column notes__container__wrapper">
                        <div class="notes__container__wrapper__main">
                            <div>
                                <div class="notes">
                                    <div class="notes__about">
                                        <div class="columns is-multiline notes__about--modified">
                                            <div class="column is-half notes__about__column">
                                                <p class="heading">キャンセルポリシー</p>
                                                <p>
                                                    体験はキャンセル可。清算後24時間以内は全額返金されます。
                                                    <span><a>キャンセルポリシーを読む。</a></span>
                                                </p>
                                            </div>
                                            <div class="column is-half notes__about__column">
                                                <p class="heading">参加人数</p>
                                                <p>
                                                    定員残り{{ event.capacity_members }}名です。
                                                </p>
                                            </div>
                                            <div class="column is-half notes__about__column">
                                                <p class="heading">参加対象</p>
                                                <p>
                                                    {{ event.target_min_age }}歳以上の方のみ参加できます。保護者による2歳未満のお子様の同伴も可能です。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <event-book-modal
            v-if="showBookModal"
            :activity-name="activity.name"
            :activity-time="event.started_at"
            :activity-price="event.price"
            :checked-box="checkedChild"
            :showBookModal="showBookModal"
            :children="userDetail.children"
            @action="book"
            @close="bookModalToggle"
        ></event-book-modal>
        <!--<reject-event-book-modal-->
            <!--v-if="showBookModal & footerClickables"-->
            <!--:showBookModal="showBookModal"-->
            <!--@close="bookModalToggle"-->
        <!--&gt;</reject-event-book-modal>-->
        <sticky-footer
            @bookActive="bookModalToggle"
            :event-price="event.price"
        ></sticky-footer>
    </div>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue';
    import EventBookModal from '@/components/modules/modals/event-book-modal/EventBookModal';
    import StickyFooter from '@/components/common/footer/StickyFooterLogic';
    import http from "@/services/http";
    import { mapGetters } from 'vuex';
    export default {
        components: {
            FadeLoader,
            EventBookModal,
            StickyFooter
        },
        data() {
            return {
                isLoading: false,
                showBookModal: false,
                // footerClickabels: false,
                checkedChild: []
            }
        },
        computed: {
            ...mapGetters({
                user: 'auth/user',
                userDetail: 'user/user'
            })
        },
        methods: {
            bookModalToggle() {
                this.showBookModal = !this.showBookModal;
            },
            footerClickables() {
                if(!!userDetail.children) {
                    return false
                }
                return true
            },
            loadingToggle() {
                return new Promise(resolve => {
                    this.isLoading = !this.isLoading;
                    resolve();
                });
            },
            loading() {
                setTimeout(this.loadingToggle, 1750);
            },
            goBookConfirm() {
                this.loadingToggle();
                this.$router.push("/book/confirm");
            },
            book(selectedChild) {
                console.log(selectedChild)
                this.bookModalToggle();
                const bookDatas = []
                selectedChild.forEach(el => {
                    const event_uuid = this.event.uuid
                    const school_uuid = this.school.uuid
                    const price_uuid = this.event.price
                    const bookData = {
                        event_uuid  : event_uuid,
                        school_uuid : school_uuid,
                        child_uuid  : el,
                        price       : price_uuid,
                    }
                    bookDatas.push(bookData)
                })
                http.post("/book", bookDatas, res => {
                    console.log(res);
                    // メール送信
                }, e => {
                    console.log('error', e)
                });
                this.loadingToggle();
                // 予約完了画面に遷移
                this.$router.push("/book/confirm");
            },
            fetchEventData() {
                console.log(this.event);
                // for(let i = 0; i < this.event.length; i++) {
                //     console.log(this.event[i]);
                //     if(ID === this.event.uuid[i]) console.log("same id");
                //     else {
                //         console.log("different");
                //     }
                // }
            }
        },
        props: {
            event: {
                type   : [Array, Object],
                default: () => []
            },
            activity: {
                type   : [Array, Object],
                default: () => []
            },
            school: {
                type   : [Array, Object],
                default: () => []
            }
        },
        created() {
            this.fetchEventData();
        },
        watch: {
            '$route': ['fetchEventData']
        },
    }
</script>

<style lang="scss" scoped>
    .loading__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    a:hover {
        opacity: 0.6;
    }
    .event__detail--title {
        font-size: 32px;
        font-weight: bold;
    }
    .heading {
        font-size: 16px;
        font-weight: bold;
        &--school {
            font-size: 12px;
        }
    }
    .section {
        @media screen and (max-width: 767px) {
            padding: 0px 24px;
        }
        .event__detail {
            &__container {
                margin: 63px 0px;
                @media screen and (max-width: 767px) {
                }
            }
            &__wrapper {
                &__main {
                    &--content {
                        .school_name {
                            color: #484848;
                        }
                        .event_title {
                            &--expand {
                                font-size: 36px;
                                font-weight: bold;
                            }
                            padding-bottom: 20px;
                        }
                        .icon_group {
                            &--item {
                                display: flex;
                                &_icon {
                                    margin-right: 16px;
                                    margin-bottom: 8px;
                                }
                            }
                        }
                        .event_recommend_comment {
                            padding: 24px 0px;
                            margin-top: 40px;
                            border-top: 1px solid #EBEBEB;
                            border-bottom: 1px solid #EBEBEB;
                            font-weight: bold;
                        }
                        .event_detail {
                            display: flex;
                            justify-content: space-between;
                            margin-top: 24px;
                            padding-bottom: 40px;
                            border-bottom: 1px solid #EBEBEB;

                        }
                        .school_detail {
                            @media screen and (max-width: 767px) {
                                display: block;
                                padding-bottom: 8px;
                                border-bottom: 1px solid #EBEBEB;
                            }
                            &--left_part {
                                width: 150%;
                                margin-right: 0px;
                                @media screen and (max-width: 767px) {
                                    width: 100%;
                                }
                                .about {
                                    width: 100%;
                                    .heading {
                                        margin: 0px auto 8px;
                                    }
                                }
                            }
                            &--right_part {
                                width: 50%;
                                margin-right: 0px;
                                @media screen and (max-width: 767px) {
                                    display: flex;
                                    align-items: center;
                                    width: 100%;
                                    padding: 8px;
                                    margin: 16px 0px;
                                    border: 1px solid #EBEBEB;
                                    border-radius: 4px;
                                }
                                .image_box {
                                    margin-right: 16px;
                                    @media screen and (max-width: 767px) {
                                        /*margin: 0px auto 16px;*/
                                        width: 48px;
                                        height: 48px;
                                    }
                                }
                                .school_info {
                                    .school_contact {
                                        font-size: 12px;
                                    }
                                }
                            }
                        }
                        .experience_detail, .experience_detail {
                            &--left_part {
                                width: 150%;
                                margin-right: 0px;
                                @media screen and (max-width: 767px) {
                                    width: 100%;
                                }
                                .about {
                                    width: 100%;
                                    .heading {
                                        margin: 0px auto 8px;
                                    }
                                }
                            }
                            &--right_part {
                            }
                        }
                    }
                }
            }
        }
        .schedule__container {
            &__wrapper {
                .schedule {
                    padding-bottom: 40px;
                    border-bottom: 1px solid #EBEBEB;
                    &__about {
                        width: 100%;
                        height: auto;
                        border: 1px solid #EBEBEB;
                        border-radius: 4px;
                        &__container {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            @media screen and (max-width: 767px) {
                                display: block;
                            }
                            &--card {
                                &_date, &_price {
                                    padding-bottom: 4px;
                                }
                                &_button {
                                    .button__expand {
                                        color: #084887;
                                        border: 2px solid #084887;
                                        border-radius: 4px;
                                        @media screen and (max-width: 767px) {
                                            width: 100%;
                                            margin-bottom: 16px;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        .notes__container {
            &__wrapper {
                padding-bottom: 40px;
                border-bottom: 1px solid #EBEBEB;
                &__about {
                    width: 100%;
                    height: auto;
                    border: 1px solid #EBEBEB;
                    border-radius: 4px;
                    &--modified {
                        margin-top: 0px;
                    }
                    &__column {
                        width: 50%;
                        height: auto;
                        padding-bottom: 24px;
                        border-bottom: 1px solid #EBEBEB;
                        @media screen and (max-width: 767px) {
                            width: 100%;
                            height: auto;
                        }
                        .heading {
                            font-weight: bold;
                            padding-bottom: 4px;
                        }
                    }
                }
            }
        }
    }
</style>
