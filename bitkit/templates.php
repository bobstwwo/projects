<template id="with__plus">
    <div class="column__bottom df" onclick="addCard(this)">
        <div class="column__bottom-plus">
            <img src="images/plus.svg" alt="">
        </div>
        <div class="column__bottom-text">
            Добавить карточку
        </div>
    </div>
</template>
<template id="with__cancel">
    <div class="new__card df">
        <div class="new__card-btn">
            Добавить карточку
        </div>
        <div class="new__card-cancel" onclick="cancel(1)">
            <img src="images/cancel.svg" alt="">
        </div>
    </div>
</template>
<template id="with__textarea">
    <div class="card not__card">
        <div class="df">
            <div class="card__text">
                <span>
                    <textarea class="card__text-textarea autosize" placeholder="Введите заголовок для этой карточки"></textarea>
                </span>
            </div>
        </div>
    </div>
</template>
<template id="simple__card">
    <div class="card" onclick="clickOnCard(this)">
        <div class="card__top">
        </div>
        <div class="df">
            <div class="card__text">
                <span>
                    ${text}
                </span>
            </div>
            <div class="card__pencil">
                <img src="images/pencil.svg" alt="">
            </div>
        </div>
    </div>
</template>
<template id="simple__column">
    <div class="column">
        <div class="column__top df">
            <div class="column__top-title">
                <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
                <textarea class="autosize" onclick="this.select()" id="textarea">${text}</textarea>
            </div>
            <div class="column__top-menu">
                <img src="images/dots.svg" alt="">
            </div>
        </div>
        <div class="cards">
        </div>
    </div>
</template>
<template id="with__plus-another">
    <div class="add__column-another">
        <div class="add__column-textarea">
            <textarea class="autosize" placeholder="Введите заголовок списка"></textarea>
        </div>
        <div class="new__card df">
            <div class="new__column-btn">
                Добавить список
            </div>
            <div class="new__card-cancel" onclick="cancel()">
                <img src="images/cancel.svg" alt="">
            </div>
        </div>
    </div>
</template>