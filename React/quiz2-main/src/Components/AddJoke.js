import { useState } from "react";
import { useDispatch } from "react-redux";
import {create} from '../actions/actions.js'
const JokeInput = () => {

    const dispatch = useDispatch();
    const [jokeName, setJokeName] = useState("")

    const handleCreate = () => {
        dispatch({
            type: create,
            payload: {
                joke: jokeName
            }
        })
    }

    return (
        <div>
            <input 
                type="text" 
                value={jokeName}
                onChange={event => setJokeName(event.target.value)}
            />
            <button onClick={handleCreate}>Add joke</button>
        </div>
    )
}

export default JokeInput;