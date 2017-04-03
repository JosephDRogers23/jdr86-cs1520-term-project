var app = angular.module('types',[]);

app.controller('Main', function($scope){
$scope.types = [
{title:'Drip Coffee', imageURL:'images/drip_coffee.jpg', alt:'Drip Coffee', description:'Drip coffee, or brewed coffee, is simply the coffee that is made when pouring hot water onto ground coffee beans. This is the most common type of coffee that is drank by the average consumer; maybe you have had a cup or two this morning!', source:'https://en.wikipedia.org/wiki/Brewed_coffee'},
{title:'Espresso', imageURL:'images/latte_2.jpg', alt:'Espresso', description:'Espresso is coffee that is made by pouring hot water on ground coffee beans, making an extremely caffeinated liquid. Most of the coffees described below are espresso based.', source:'https://en.wikipedia.org/wiki/Espresso'},
{title:'Cappuccino', imageURL:'images/latte.jpg', alt:'Cappuccino', description:'A cappuccino is a type of coffee made with double espresso, hot milk, and steamed milk foam. It differs from a latte in that it has more espresso and foam on the top, making it a stronger drink with higher caffeine content.', source:'https://en.wikipedia.org/wiki/Cappuccino'},
{title:'Irish Coffee', imageURL:'images/cinnamon_latte.jpg', alt:'Irish Coffee', description:'An Irish Coffee is a type of coffee that has hot drip coffee and Irish whiskey, usually with sugar, and topped off with cream. It is more of a dessert drink and is more commonly found in European cafes, where alcohol rules are more relaxed than in the United States.', source:'https://en.wikipedia.org/wiki/Irish_coffee'},
{title:'Viennese Coffee', imageURL:'images/viennese_coffee.jpg', alt:'Viennese Coffee', description:'A Viennese Coffee is a type of coffee specifically found in Prague, Czechia that consists of half drip coffee, half whipped cream. It is extremely sweet and meant as a dessert drink. Contrary to its name, it is not from Vienna, but represents Viennese culture to the Czech people, and is therefore named after the nearby city. This is similar to a dish called "Ostrich Eggs" which is a boiled egg encased in meat; neither the meat nor the egg are from an ostrich, but it looks like an ostrich to the Czech people.', source:'mailto:jdr86@pitt.edu'},
{title:'Latte', imageURL:'images/latte.jpg', alt:'Latte', description:'A latte is type of coffee made with espresso and steamed milk. In Italian, its full name is caffelatte, which means “milk coffee”. In some other European cultures it is called a café au lait.', source:'https://en.wikipedia.org/wiki/Latte'}];
});


/* Source: https://codepen.io/ganarajpr/pen/FuBKj */
