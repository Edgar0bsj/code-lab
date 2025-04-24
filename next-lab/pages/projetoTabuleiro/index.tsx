import Linha from "../../components/projetoTabuleiro/Linha";
import styles from "../../styles/projetoTabuleiro/Home.module.css"

const home = ()=>{
    return (
        <div className={styles.conteiner}>
            <Linha/>
            <Linha preta/>
            <Linha/>
            <Linha preta/>
            <Linha/>
            <Linha preta/>
            <Linha/>
            <Linha preta/>
        </div>
    )
};

export default home;