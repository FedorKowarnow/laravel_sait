import Header from './layouts/Header'
import Footer from './layouts/Footer'


export default function Category({categories}){
    //console.log(categories);
    return (
        <>
        <Header />
        <div>
        <a className="nav-link" href={route('review.index')}>Все обзоры</a>
        </div>
        <div>
            {categories.map(category=>(
                <div key={category.id}>
                    <a href={route('review.index', {category_id: category.id})}><img src={category.image} alt=""></img>{category.title}</a>
                    <div><a>{category.information}</a></div>
                </div>
            ))}
        </div>
        <Footer />
        </>
    );
}
