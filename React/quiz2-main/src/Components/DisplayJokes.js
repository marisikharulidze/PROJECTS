import axios from "axios";
import { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import Joke from "./Joke";
import { change } from "../actions/actions";
import AddJoke from "./AddJoke";
import {AddJokes} from '../actions/actions'

const Jokes = () => {

    const dispatch = useDispatch();
    const jokes = useSelector(state => state.jokes)

    useEffect(() => {
        axios.get("https://icanhazdadjoke.com/search?limit=10", {
            headers:{
                Accept: 'application/json' 
            }
        }).then(response => {
            console.log(response.data.results)
            dispatch({
                type: AddJokes,
                payload: response.data.results
            })
        })
    }, [dispatch])

    return (
        <div>
            <h2>Jokes</h2>
            <AddJoke/>
            <br/>
            {
                jokes.map((joke, index) => (
                    <Joke key={index} joke={joke}/>
                ))
            }
        </div>
    )
}

export default Jokes;