import { configureStore } from "@reduxjs/toolkit";
import Jokes from "../reducers/jokes.js";
import { applyMiddleware } from 'redux';
import thunk from "redux-thunk";
import FavoriteJokes from "../reducers/FavoriteJokes";


export default configureStore({
    reducer: {
        jokes: Jokes,
        favorites: FavoriteJokes
    }
}, applyMiddleware(thunk))