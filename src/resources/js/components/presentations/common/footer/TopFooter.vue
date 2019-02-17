<template>
  <footer>
    <ul class="footer__items">
      <li class="footer__item">
        <a class="footer_item_text">COMPANY</a>
      </li>
      <li class="footer__item">
        <a class="footer_item_text">JOBS</a>
      </li>
      <li class="footer__item">
        <a class="footer_item_text">EVENTS</a>
      </li>
      <li class="footer__item">
        <a class="footer_item_text">MAGAZINE</a>
      </li>
      <li class="footer__item">
        <a class="footer_item_text">CONTACT</a>
      </li>
    </ul>
    <div class="footer__rights">
      © 2019 kids weekend, Inc. Made Time for Mam.
    </div>
  </footer>
</template>

<script></script>

<style lang="scss" scoped>
  footer {
    display: flex;
    font-weight: bold;
    margin: 96px 16px 16px 16px;

    @media (max-width: 767px) {
      display: block;
    }

    .footer__items {
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
      list-style-type: none;
      display: flex;
      flex: 1;
      line-height: 100%;
      align-items: center;

      .footer__item {
        margin: 0 16px 0 0;
        padding: 0;
        list-style-type: none;

        .footer_item_text {
          padding: 16px 4px;
          display: inline-block;
          font-size: 1rem;
          letter-spacing: .1em;
          color: #4A4A4A;
        }
      }
    }

    .footer__rights {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      font-weight: bold;
      font-size: .9rem;
      flex: none;
      letter-spacing: .05em;
    }
  }
</style>
