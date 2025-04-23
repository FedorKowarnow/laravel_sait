
import { Link } from '@inertiajs/react';
export default function Header(){
    return (
        <>
        <nav className="navbar navbar-expand-lg bg-body-tertiary">
                <div className="container-fluid">
                  <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav">
                      <li className="nav-item">
                        <Link className="nav-link active" aria-current="page" href={route('main')}>Главная</Link>
                      </li>
                      <li className="nav-item">
                        <Link className="nav-link" href={route('category.index')}>Обзоры</Link>
                      </li>
                      
                      <li className="nav-item">
                        <Link className="nav-link" href={route('register')}>Регистрация</Link>
                      </li>
                      <li className="nav-item">
                        <Link className="nav-link" href={route('login')}>Вход</Link>
                      </li>
                      <li className="nav-item">
                        <Link className="nav-link" href={route('home')}>Кабинет пользователя</Link>
                      </li>
                      <li className="nav-item dropdown">
                        <Link className="nav-link" method="post" href={route('exit')}>
                          <a>Выход</a>
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </>
    );
}