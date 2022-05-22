import { addFavJoke } from "../actions/actions";

export default function FavoriteJokesReducer(state = [], action){
    switch (action.type) {
        case addFavJoke:
            return [...state, action.payload]
        default:
            return state;
    }
}