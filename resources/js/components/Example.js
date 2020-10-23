import React, {useState} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

function Example() {
    const [file, setFile] = useState("");

     const fileSelectedHandler = event => {
        // console.log(event.target.files[0]);
        const file = event.target.files[0];
        setFile(file);
    }

    const fileUploadHandler = () => {
        let fd = new FormData();
        fd.append("image", file);
       axios.post('http://groninger.test/profile/imageupdate', fd).then(res=>{
           console.log(res);
        })
    }
    return (
        <div className="container">
                <div className="form-group">
                    <label htmlFor="image">Profile Image</label>
                    <input type="file" className="form-control-file"
                    onChange={fileSelectedHandler}/>
                </div>
                <div className="form-group row mb-0 mt-5">
                    <div className="col-md-8 offset-md-4">
                        <button type="submit" value="submit" className="btn btn-primary"
                                onClick={fileUploadHandler}
                        >
                            Add Profile Image
                        </button>
                    </div>
                </div>
        </div>
    );
}

export default Example;

if (document.getElementById('profileForm')) {
    let data = document.getElementById('profileForm').getAttribute('data')
    ReactDOM.render(<Example data={data}/>, document.getElementById('profileForm'));
}
// let myData = JSON.parse(props.data);
// console.log(myData);
