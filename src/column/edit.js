import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Edit() {
    return (
        <div {...useBlockProps()}>
            <InnerBlocks templateLock={false} />
        </div>
    );
}
