import './bootstrap';
import Vue from 'vue';
import ArticleLike from './components/ArticleLike';
import ArticleTagsInput from './components/ArticleTagsInput';
import FollowButton from './components/FollowButton.vue';

const app = new Vue({
    el: '#app',
    components: {
        ArticleLike,
        ArticleTagsInput,
        FollowButton
    }
})
