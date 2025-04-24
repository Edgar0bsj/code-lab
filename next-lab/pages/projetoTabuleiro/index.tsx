import Linha from "../../components/projetoTabuleiro/Linha";
import styles from "../../components/projetoTabuleiro/styles/Home.module.css"

const home = ()=>{
    return (
        <div className={styles.conteiner}>
            <Linha preta={true}/>
            <Linha preta={false}/>
            <Linha preta={true}/>
            <Linha preta={false}/>
            <Linha preta={true}/>
            <Linha preta={false}/>
            <Linha preta={true}/>
            <Linha preta={false}/>
        </div>
    )
};

export default home;