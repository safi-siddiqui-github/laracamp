export default function Page() {

    const mR = 5.5;
    const mRP = ((mR - 1) * 100).toFixed(2);
    const fPCR = 0.3;
    const fPCRP = fPCR * 100;

    const kdItems = [
        {
            title: 'K&ns Tender Pops',
            price: 1648,
            pack: 'Family',
            weight: 1326,
            minPcs: 100,
            maxPcs: 102,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'Sabroso Crispy Poppers',
            price: 1140,
            pack: 'Family',
            weight: 1000,
            minPcs: 35,
            maxPcs: 40,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'K&ns Chicken Nuggets',
            price: 1750,
            pack: 'Family',
            weight: 1700,
            minPcs: 74,
            maxPcs: 76,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 14,
                },
            ]
        },
        {
            title: 'Sabroso Chicken Nuggets',
            price: 875,
            pack: 'Family',
            weight: 1700,
            minPcs: 44,
            maxPcs: 45,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 14,
                },
            ]
        },
        {
            title: 'K&ns Fun Nuggets',
            price: 1657,
            pack: 'Family',
            weight: 1500,
            minPcs: 50,
            maxPcs: 52,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'Sabroso Aqua Buddies',
            price: 890,
            pack: 'Family',
            weight: 1000,
            minPcs: 43,
            maxPcs: 44,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'K&ns Croquettes',
            price: 1106,
            pack: 'Family',
            weight: 1000,
            minPcs: 53,
            maxPcs: 55,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Fiery Fingers',
            price: 1110,
            pack: 'Family',
            weight: 780,
            minPcs: 58,
            maxPcs: 60,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 18,
                },
            ]
        },
        {
            title: 'Sabroso Chicorn Fries',
            price: 845,
            pack: 'Family',
            weight: 1000,
            minPcs: 49,
            maxPcs: 51,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'Sabroso Chicken Strips',
            price: 1140,
            pack: 'Family',
            weight: 1000,
            minPcs: 22,
            maxPcs: 30,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'K&ns Kafta Kabab',
            price: 940.7,
            pack: 'Family',
            weight: 515,
            minPcs: 22,
            maxPcs: 23,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Hot Tender',
            price: 1110,
            pack: 'Family',
            weight: 780,
            minPcs: 16,
            maxPcs: 19,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Chicken Tempura',
            price: 1025,
            pack: 'Family',
            weight: 660,
            minPcs: 30,
            maxPcs: 31,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Tempura Nuggets',
            price: 1120,
            pack: 'Family',
            weight: 660,
            minPcs: 49,
            maxPcs: 51,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Burger Patty',
            price: 1161,
            pack: 'Family',
            weight: 1070,
            minPcs: 15,
            maxPcs: 16,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 1,
                },
                {
                    title: 'Medium',
                    pcs: 2,
                },
                {
                    title: 'Large',
                    pcs: 3,
                },
            ]
        },
        {
            title: 'Sabroso Burger Patty',
            price: 860,
            pack: 'Family',
            weight: 1070,
            minPcs: 15,
            maxPcs: 16,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Burger Crispy Patty',
            price: 860,
            pack: 'Family',
            weight: 1070,
            minPcs: 11,
            maxPcs: 12,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Zesty Fillet',
            price: 1370,
            pack: 'Family',
            weight: 1000,
            minPcs: 6,
            maxPcs: 8,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'K&ns Combo Wings',
            price: 1030,
            pack: 'Family',
            weight: 850,
            minPcs: 8,
            maxPcs: 9,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Shami Kabab',
            price: 1648,
            pack: 'Family',
            weight: 1296,
            minPcs: 35,
            maxPcs: 36,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Shami Kabab',
            price: 1180,
            pack: 'Family',
            weight: 1000,
            minPcs: 20,
            maxPcs: 25,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'K&ns Chapli Kabab',
            price: 1055,
            pack: 'Family',
            weight: 900,
            minPcs: 11,
            maxPcs: 12,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Chapli Kabab',
            price: 855,
            pack: 'Family',
            weight: 900,
            minPcs: 12,
            maxPcs: 14,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'K&ns Seekh Kabab',
            price: 1699,
            pack: 'Family',
            weight: 1080,
            minPcs: 35,
            maxPcs: 36,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 10,
                },
                {
                    title: 'Large',
                    pcs: 16,
                },
            ]
        },
        {
            title: 'Sabroso Shami Kabab',
            price: 1450,
            pack: 'Family',
            weight: 1000,
            minPcs: 30,
            maxPcs: 33,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
        {
            title: 'Sabroso Gola Kabab',
            price: 1520,
            pack: 'Family',
            weight: 1000,
            minPcs: 40,
            maxPcs: 45,
            subTypes: [
                {
                    title: 'Regular',
                    pcs: 6,
                },
                {
                    title: 'Medium',
                    pcs: 8,
                },
                {
                    title: 'Large',
                    pcs: 13,
                },
            ]
        },
    ]

    return (
        <div className="flex flex-col p-5 gap-10">

            <div className="flex flex-col gap-5">
                <h1 className="text-3xl">Kitchen Delight</h1>

                <div className="flex gap-5">
                    <div className="flex flex-col gap-1">
                        <h2 className="text-xl">Markup Rate</h2>
                        <p className="font-medium">{mR} ({mRP}%)</p>
                    </div>

                    <div className="flex flex-col gap-1">
                        <h2 className="text-xl">Food Panda Commision Rate Per Order</h2>
                        <p className="font-medium">{fPCR} ({fPCRP}%)</p>
                    </div>
                </div>
            </div>

            {
                kdItems.map(({
                    title,
                    price,
                    pack,
                    weight,
                    minPcs,
                    maxPcs,
                    subTypes,
                }) => {

                    const avgPieces = (minPcs + maxPcs) / 2;
                    const pricePerPiece = (price / avgPieces).toFixed(2);
                    const totalMarkup = (price * mR).toFixed(2);
                    const totalFPComm = (totalMarkup * fPCR).toFixed(2);
                    // const totalProfit = (totalFPComm * fPCR).toFixed(2);

                    /*

                    const mR = 5.5;
                    const mRP = ((mR - 1) * 100).toFixed(2);
                    const fPCR = 0.3;
                    const fPCRP = fPCR * 100;

                    const orderCost = (pcs * pricePerPiece).toFixed(2);
                    const sellingPrice = (orderCost * mR).toFixed(2);
                    const fpComPerOrder = (sellingPrice * fPCR).toFixed(2);

                    // in order to satisfy selling price
                    // and cover foodpanda commision
                    // we get 70% of selling price
                    const amountRecieved = (sellingPrice * (1 - fPCR)).toFixed(2);
                    const profitPerOrder = (amountRecieved - orderCost).toFixed(2);
                    const noOfOrders = (avgPieces / pcs).toFixed(2);
                    
                     */

                    return (
                        <table className="border cursor-default">
                            <tr className="">
                                <th className="py-1">Name</th>
                                <th className="">Price</th>
                                <th className="">Pack</th>
                                <th className="">Weight</th>
                                <th className="">Avg Pcs</th>
                                <th className="">Price Piece</th>
                                <th className="">Markup Price</th>
                                <th className="">FP Com.</th>
                                <th className="">Total Profit</th>
                            </tr>
                            <tr className="text-center border hover:bg-slate-50" key={title}> {/* KD Item - Sub Item */}
                                <td className="py-1 font-medium">{title}</td>
                                <td className="">{price}</td>
                                <td className="">{pack}</td>
                                <td className="">{weight}gm</td>
                                <td className="">{avgPieces} pcs</td>
                                <td className="">{pricePerPiece} rs</td>
                                <td className="">{totalMarkup} rs</td>
                                <td className="">{totalFPComm} rs</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colSpan={8} className="col-span-6">
                                    <table className="w-full my-2">
                                        <tr>
                                            <th>Type</th>
                                            <th>Pieces</th>
                                            <th>Order Cost</th>
                                            <th>Selling Price</th>
                                            <th>FP Commision</th>
                                            <th>Amount Recieve</th>
                                            <th>Profit</th>
                                            <th>Total Orders</th>
                                        </tr>

                                        {subTypes.map(({ title, pcs }) => {

                                            const orderCost = (pcs * pricePerPiece).toFixed(2);
                                            const sellingPrice = (orderCost * mR).toFixed(2);
                                            const fpComPerOrder = (sellingPrice * fPCR).toFixed(2);

                                            // in order to satisfy selling price
                                            // and cover foodpanda commision
                                            // we get 70% of selling price
                                            const amountRecieved = (sellingPrice * (1 - fPCR)).toFixed(2);
                                            const profitPerOrder = (amountRecieved - orderCost).toFixed(2);
                                            const noOfOrders = (avgPieces / pcs).toFixed(2);

                                            // KD Item - Sub Items - Sub Type
                                            return (
                                                <tr className="text-center hover:bg-slate-50" key={title + title}>
                                                    <td className="">{title}</td>
                                                    <td className="">{pcs}</td>
                                                    <td className="">{orderCost} rs</td>
                                                    <td className="">{sellingPrice} rs</td>
                                                    <td className="">{fpComPerOrder} rs</td>
                                                    <td className="">{amountRecieved} rs</td>
                                                    <td className="">{profitPerOrder} rs</td>
                                                    <td className="">{noOfOrders}</td>
                                                </tr>
                                            )
                                        })}
                                    </table>
                                </td>
                            </tr>

                        </table >
                    )
                })
            }


        </div >
    )
}