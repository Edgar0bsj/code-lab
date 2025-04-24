import styles from "../../styles/projetoTabuleiro/linha.module.css"
import Quadradinho from "./quadradinho";

const Linha = (props:any) => {
    return (
        <div className={styles.linha}>
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />
            <Quadradinho preta={props.preta} />
            <Quadradinho preta={!props.preta} />

        </div>
    )

};

export default Linha;