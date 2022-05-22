import { remove, change, create, AddJokes } from "../actions/actions"

export default function JokesReducer(state = [], action){
    switch (action.type) {
        case AddJokes:
            return action.payload
        case create:
            return [...state, action.payload]
        case change:
            return state.map(joke => {
                return joke === action.payload.joke ? {
                    ...joke, joke: action.payload.newText
                } : joke
            })
        case remove:
            return state.filter(function(joke){
                return joke !== action.payload
            })
        default:
            return state;
    }
}