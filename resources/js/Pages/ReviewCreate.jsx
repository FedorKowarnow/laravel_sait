import Header from './layouts/Header'
import Footer from './layouts/Footer'
import { useForm } from '@inertiajs/react'

export default function ReviewCreate({categories}){
    
    const { data, setData, post, processing, progress , errors } = useForm({
        title: '',
        content: '',
        category_id:'1',
        image: null,

      })
    
    function submit(e) {
        e.preventDefault()
        post('/reviews')
      }
      
    return (
        <>
            <Header />
            <div>
                <form onSubmit={submit}>
                    <div className="mb-3">
                        <label className="form-label">Название обзора</label>
                        <input type="text" name="title" value={data.title} onChange={e => setData('title', e.target.value)} className="form-control" id="title" placeholder="Title" />
                        {errors.title && <div>{errors.title}</div>}
                    </div>
                    <div className="mb-3">
                        <label className="form-label">Текст обзора</label>
                        <textarea className="form-control" name="content" value={data.content} onChange={e => setData('content', e.target.value)} id="content" placeholder="Content" />
                        {errors.content && <div>{errors.content}</div>}
                    </div>
                    <div>
                        <label>Обозреваемый продукт</label>
                        <select className="form-select" id="category" name="category_id" onChange={e => setData('category_id', e.target.value)}>
                            {categories.map(category=>(
                                <option key={category.id} value={category.id}>{category.title}</option>
                            ))} 
                        </select>
                    <div className="mb-3">
                        <label>Фото</label>
                        <input type="file" multiple name="image[]" onChange={e => setData('image', e.target.files)} className="form-control" id="image" placeholder="Image" accept=".png, .jpg, .jpeg"/>
                        {progress && (
                        <progress value={progress.percentage} max="100">
                        {progress.percentage}%
                        </progress>
                        )}
                    </div>
                    </div>
                    <button type="submit" className="btn btn-primary mb-3">Опубликовать</button>
                </form>
            </div>
            <Footer />
        </>
    );
}

