<template>

<div>
  <div v-bind:style="image" class="imageaage">
  <div v-bind:class="menupage">
      <title>{{ app }}</title>
      <ul v-bind:style="listli">
<li v-bind:style="listlis" v-bind:type="circle" v-for="key in menusks" v-bind:title="key"><a v-bind:href="key" v-bind:style="styleObject">{{ key}}</a></li>


</ul>
</div>
</div>
    <div v-bind:style="menupage2">
        <h1>TEST !!!! {{ prop.split('2').reverse().join('3') }}</h1>// 2 на 1
        <h2>TEST !!!! {{ prop.split('1').reverse().join('2') }}</h2>// 1 на 2
        <h2>TEST !!!! {{ prop.split('').reverse().join('') }}</h2>
        <div id="example-1">
  <button v-on:click="counter += 1">+1</button>
  <button v-on:click="counter -= 1">-1</button>
  <p>Кнопка выше была нажата {{ counter }} раз</p>

        <h2>{{ message }}</h2>
        <h3>{{ test1 }}</h3>
 
        <button v-bind:none="isButtonDisabled">Кнопка</button>
        <input v-model="messager">
  
  
    
    <span v-if="seen">Сейчас меня видно3</span>
    <span v-once>Это сообщение никогда не изменится: </span>
    <a v-bind:href="url"> Вебсайт </a>
    <h1>TEST !!!! {{ func1() }}</h1>// 2 на 1
    <h2>TEST !!!! {{ func2() }}</h2>// 1 на 2
    <h2>TEST !!!! {{ func3() }}</h2>
    <h3> {{ tex1() }} </h3>
    
    <h3>{{ now }}</h3>

    <li v-for="todo in ACCE">
      {{ todo.text }}
    </li>
 
    <button v-on:click="reverseMessage">Перевернуть сообщение</button>
    </div>

</div>
</div>
</template>

<script>
export default {
    data() {
        return {
            'prop': '1112',
            'image': 'http://127.0.0.1/img_nature.jpg',
            'message': 'Вы загрузили эту страницу2: ' + new Date().toLocaleString(),
            'test1': 'Азора',
            'app': 'Разработка',
            textDecoration: 'center',
             counter: 0,
            messager: 'Привет, Vue!',
            menu1: 'Start',
            menu2: 'Register',
            menu3: 'Static',
            url1: '/start',
            url2: '/reg',
            url3: '/static',
            seen: true,
            circle: "circle",
            url: "http://www.yandex.ru",
            styleObject: {
    color: 'red',
    textdecoration: 'blue',
    fontSize: '18px',
    'text-decoration': 'none'
  },
  listli: {
    margin: '0',
    'list-style': '0',
    'padding-left': '50%'
  },
    listlis: {
    float: 'left',
    'margin-right': '5px'
  },
  menupage : {
  float: 'center',
  color: '#f2f2f2',
  'text-align': 'center',
  padding: '14px 16px',
  'text-decoration': 'none',
  'font-size': '17px'
  },
  menupage2 : {
  float: 'left',
  color: 'red',
  'text-align': 'left',
  padding: '50px 50px',
  'text-decoration': 'none',
  'font-size': '15px'
  },
            ACCE: [
      { text: 'Изучить JavaScript' },
      { text: 'Изучить Vue' },
      { text: 'Создать что-нибудь классное' },
            ],
          menusks: {
        key1: 'Start',
        key2: 'Register',
        key3: 'Static',
        },
                
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
  },
  isButtonDisabled() {
        // you can  check your form is filled or not here.
  
  },
  imageaage: function() {
            return {'background-image': `url(${this.image})`}
        }
}
};

</script>
