<?php 
/*Template Name: home*/

?>

<?php get_header();?>
    <div id="main-title">
      <div class="container">
        <div class="main-title flex-column align-content-center">
          <h1>
            Преобразуй <br />
            энергию в жизнь
          </h1>
          <p class="main-title__subtitle">
            Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
            faucibus. Scelerisque sed enim volutpat in diam.
          </p>
          <div class="main-title__buttons-block">
          <input class="main-title__activator" type="radio" name="old-bt" id="old-bt_1" checked/>
            <label class="main-title__button-1 main-title__button" for="old-bt_1">я новичок</label>
            <input class="main-title__activator" type="radio" name="old-bt" id="old-bt_2" />
            <label class="main-title__button-2 main-title__button" for="old-bt_2">я старичок</label>
            
          </div>
        </div>
        <div class="main-title__cards"></div>
      </div>
    </div>
    <div id="categories">
      <div class="container">
        <div class="categories d-flex">
          <input
            checked="checked"
            class="categories__activator"
            id="carousel-slide-activator-1"
            name="carousel"
            type="radio"
          />
          <input
            class="categories__activator"
            id="carousel-slide-activator-2"
            name="carousel"
            type="radio"
          />
          <div class="categories__static-block">
            <p class="categories__title">категории модулей</p>
            <div class="categories__buttons-block">
              <label for="carousel-slide-activator-1"><i class="fa-solid fa-arrow-left"></i></label>
              <label for="carousel-slide-activator-2"
                ><i class="fa-solid fa-arrow-right"></i
              ></label>
            </div>
          </div>
          <div class="categories__dynamic-blocks">
            <div class="categories__track d-flex">
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 1</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 2</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 3</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 4</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 5</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 6</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
              <div class="categories__dynamic-block flex-column">
                <div class="categories__icon-label d-flex align-items-center">
                  <i class="fa-solid fa-heart-circle-plus"></i>
                  <p class="categories__label">Для защиты 7</p>
                </div>
                <button class="categories__dynamic-block-button">перейти в раздел</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="newbie">
      <div class="container">
        <div class="newbie">
          <div class="newbie__text-block">
            <p class="newbie__title">Новичок? Получи бесплатную консультацию</p>
            <p class="newbie__subtitle">
              Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
              faucibus. Scelerisque sed enim volutpat in diam.
            </p>
            <button class="newbie__button">я новичок</button>
          </div>
        </div>
      </div>
    </div>
    <div id="terms-of-delivery">
      <div class="container">
        <div class="terms-of-delivery">
          <div class="terms-of-delivery__upper align-items-center">
            <h2>УСЛОВИЯ ДОСТАВКИ</h2>
            <p>Здесь можно подробнее ознакомиться с условиями доставки товаров</p>
          </div>
          <div class="terms-of-delivery__lower">
            <div class="terms-of-delivery__title-block align-items-center">
              <i class="fa-solid fa-box"></i>
              <p class="terms-of-delivery__title">Доставка осуществляется после оплаты товара</p>
            </div>
            <div class="terms-of-delivery__button-block align-items-center">
              <p class="terms-of-delivery__label">
                После оплаты напишите нам в Телеграм и отправьте чек и мы вышлем вам товар
              </p>
              <button class="terms-of-delivery__telegram-button align-items-center">
                <p>Написать в Telegram</p>
                <i class="fa-solid fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="faq">
      <div class="container">
        <div class="faq d-flex">
          <p class="faq__title">faq</p>
          <div class="faq__accordion">
            <div class="faq__floor-1 faq__floor">
              <input type="radio" name="faq" id="faq_1" checked />
              <div class="faq__label">
                <label for="faq_1" class="faq__block-name">С чего начать?</label>
                <label class="faq__i-bg" for="faq_1">
                  <i class="fa-sharp fa-solid fa-plus"></i>
                </label>
              </div>
              <div class="faq__body">
                <p>
                  Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
                  faucibus. Scelerisque sed enim volutpat in diam.
                </p>
              </div>
            </div>
            <div class="faq__floor-2 faq__floor">
              <input type="radio" name="faq" id="faq_2" />
              <div class="faq__label">
                <label for="faq_2" class="faq__block-name">Как работают модули? </label>
                <label class="faq__i-bg" for="faq_2">
                  <i class="fa-sharp fa-solid fa-plus"></i>
                </label>
              </div>
              <div class="faq__body">
                <p>
                  Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
                  faucibus. Scelerisque sed enim volutpat in diam.
                </p>
              </div>
            </div>
            <div class="faq__floor-3 faq__floor">
              <input type="radio" name="faq" id="faq_3" />
              <div class="faq__label">
                <label for="faq_3" class="faq__block-name">Могут ли модули навредить?</label>
                <label class="faq__i-bg" for="faq_3">
                  <i class="fa-sharp fa-solid fa-plus"></i>
                </label>
              </div>
              <div class="faq__body">
                <p>
                  Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
                  faucibus. Scelerisque sed enim volutpat in diam.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="reviews">
      <div class="container">
        <div class="reviews d-flex">
          <div class="reviews__static-block">
            <p class="reviews__title">категории модулей</p>
            <div class="reviews__subtitle">Результаты наших пользователей</div>
            <div class="reviews__buttons-block">
              <button><i class="fa-solid fa-arrow-left"></i></button>
              <button><i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </div>
          <div class="reviews__dynamic-block flex-column">
            <div class="reviews__icon-label d-flex align-items-center">
              <div></div>
              <p class="reviews__label">имя фамилимя</p>
            </div>
            <p class="reviews__description">
              Lorem ipsum dolor sit amet consectetur. Risus tellus fermentum nunc nibh et nunc
              faucibus. Scelerisque sed enim volutpat in diam. faucibus. Risus tellus fermentum nunc
              nibh et. Scelerisque sed enim volutpat in diam. faucibus. Risus tellus fermentum nunc
              nibh et. Scelerisque sed enim volutpat in diam. faucibus. Risus tellus fermentum nunc
              nibh et.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="question">
      <div class="container">
        <div class="question">
          <div class="question__relative flex-column">
            <div class="question__title-block d-flex align-items-center">
              <p class="question__title">Остались какие-либо вопросы?</p>
              <p class="question__subtitle">
                Напишите интересующий вас вопрос в наш чат бот в телеграме и мы с удовольствием
                ответим
              </p>
            </div>
            <div class="justify-content-center">
              <button class="question__telegram-button align-items-center">
                <p>Написать в Telegram</p>
                <i class="fa-solid fa-paper-plane"></i>
              </button>
            </div>
            <div class="justify-content-center">
              <div class="question__photo-1"></div>
            </div>
            <div class="question__photo-2"></div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
