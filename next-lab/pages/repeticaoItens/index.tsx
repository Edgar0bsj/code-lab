const home = () => {

    //Lista de nomes
    const listaNomes: string[] = ["Edgar", "Marcelo", "Marcia", "DonaLucia"]

    //função que prepara pra ser usado no tsx
    function renderizarLista(): any {
        return listaNomes.map((e, i) => <li key={i}> {e} </li>)
    }


    return (
        <div>
            <ul>
                {renderizarLista()}
            </ul>
        </div>
    )
};

export default home;
