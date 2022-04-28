<template>
<div>
    <div>
        <h1>TEST !!!! {{ prop.split('2').reverse().join('3') }}</h1>// 2 на 1
        <h2>TEST !!!! {{ prop.split('1').reverse().join('2') }}</h2>// 1 на 2
        <h2>TEST !!!! {{ prop.split('').reverse().join('') }}</h2>
        <h2>{{ message }}</h2>
        <h3>{{ test1 }}</h3>
        <h3>{{ rawHtml }}</h3>
        <button v-bind:false="isButtonDisabled">Кнопка</button>
        <input v-model="messager">
    </div>
    <div id="app-3">
    <span v-if="seen">Сейчас меня видно</span>
    <span v-once>Это сообщение никогда не изменится: {{ msg }}</span>
    <a v-bind:href="url"> Вебсайт </a>
    <h1>TEST !!!! {{ func1() }}</h1>// 2 на 1
    <h2>TEST !!!! {{ func2() }}</h2>// 1 на 2
    <h2>TEST !!!! {{ func3() }}</h2>
    <h3> {{ tex1() }} </h3>
    <h3>{{ now }}</h3>
    <a v-bind:[foobar]="value" v-on:click="console.log('Good');"> TEST2 </a>
    <li v-for="todo in ACCE">
      {{ todo.text }}
    </li>
    <button v-on:click="reverseMessage">Перевернуть сообщение</button>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            'prop': '1112',
            'message': 'Вы загрузили эту страницу2: ' + new Date().toLocaleString(),
            'test1': 'Азора',
            messager: 'Привет, Vue!',
            seen: true,
            url: "http://www.yandex.ru",
            ACCE: [
      { text: 'Изучить JavaScript' },
      { text: 'Изучить Vue' },
      { text: 'Создать что-нибудь классное' },
            ],
            groceryList: [
      { id: 0, text: 'Овощи' },
      { id: 1, text: 'Сыр' },
      { id: 2, text: 'Что там ещё люди едят?' }
    ]
        };
    },
    methods: {
    reverseMessage: function () {
      this.test1 = this.test1.split('').reverse().join('')
    },
    func1: function () {
    return this.prop.split('2').reverse().join('3')
  },
  func2: function () {
    return this.prop.split('1').reverse().join('2')
  },
  func3: function () {
    return this.prop.split('').reverse().join('')
  },
  tex1: function(){
    return this.test1 + ' ' + this.message.split('2022').reverse().join('')
  }},
  computed: {
  now() {
    let _date = new Date()
    return _date.toLocaleString()
  }
}
};

</script>
